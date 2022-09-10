<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Support\Facades\File;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->orderBy('id', 'desc')
                ->whereNotIn('category', [
                    'games_results_national',
                    'g_r_int_asian',
                    'g_r_int_asian_beach',
                    'g_r_int_asian_youth',
                    'g_r_int_common_wealth',
                    'g_r_int_common_wealth_youth',
                    'g_r_int_children',
                    'g_r_int_islamic',
                    'g_r_int_summer',
                    'g_r_int_youth_olympic',
                    'g_r_int_south_asian',
                    'g_r_int_south_asian_beach'
                ])
                ->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function gamesResults()
    {
        $posts = DB::table('posts')->orderBy('id', 'desc')
                ->whereIn('category', [
                    'games_results_national',
                    'g_r_int_asian',
                    'g_r_int_asian_beach',
                    'g_r_int_asian_youth',
                    'g_r_int_common_wealth',
                    'g_r_int_common_wealth_youth',
                    'g_r_int_children',
                    'g_r_int_islamic',
                    'g_r_int_summer',
                    'g_r_int_youth_olympic',
                    'g_r_int_south_asian',
                    'g_r_int_south_asian_beach'
                    ])
                ->paginate(10);
        return view('admin.games-results.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    public function gamesResultCreate()
    {
        return view('admin.games-results.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category'=>'required',
            'title'=>'required',
            'status'=>'required'
        ]);
        $post = new Post();

        $file = $request->file('file');
        if($file){
            $name = date('dmYhis').$file->getClientOriginalName();
            $path = public_path("frontend/assets/posts/files/".$request->input('category'));
            $file->move($path, $name);
            $post->file = $name;
        }

        $img = $request->file('image');
        if($img){
            $name = date('dmYhis').$img->getClientOriginalName();
            $path = public_path("frontend/assets/posts/images/".$request->input('category'));
            $img->move($path, $name);
            $post->image = $name;
        }
        $post->category = $request->input('category');
        $post->title = $request->input('title');
        $post->details = $request->input('details');
        $post->start_date = $request->input('start_date');
        $post->status = $request->input('status');
        $post->save();
        
        if($request->input('postType') == 'gamesResults'){
            return redirect()->route('all-games-results')->with('msg','Games and Result Created Successfully');
        }else{
            return redirect()->route('all-posts')->with('msg','Post Created Successfully');            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.posts.show', compact(
            'post'
        ));
    }

    public function gamesResultShow($id)
    {
        $post = Post::find($id);
        return view('admin.games-results.show', compact(
            'post'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit', compact(
            'post'
        ));
    }

    public function gamesResultEdit($id)
    {
        $post = Post::find($id);
        return view('admin.games-results.edit', compact(
            'post'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'category'=>'required',
            'title'=>'required',
            'status'=>'required'
        ]);
        $post = Post::find($id);
        $file = $request->file('file');
        if($file){
            if($post->file) {
                $existing_file = public_path("frontend/assets/posts/files/".$post->category."/".$post->file);
                if(File::exists($existing_file)){
                    unlink($existing_file);
                } 
            }
            $name = date('dmYhis').$file->getClientOriginalName();
            $path = public_path("frontend/assets/posts/files/".$request->input('category'));
            $file->move($path, $name);
            $post->file = $name;
        }
        $img = $request->file('image');
        if($img){
            if($post->image) {
                $existing_image = public_path("frontend/assets/posts/images/".$post->category."/".$post->image);
                if(File::exists($existing_image)){
                    unlink($existing_image);
                } 
            }
            $name = date('dmYhis').$img->getClientOriginalName();
            $path = public_path("frontend/assets/posts/images/".$request->input('category'));
            $img->move($path, $name);
            $post->image = $name;
        }
        $post->category = $request->input('category');
        $post->title = $request->input('title');
        $post->details = $request->input('details');
        $post->start_date = $request->input('start_date');
        $post->status = $request->input('status');
        $post->save();
        
        if($request->input('postType') == 'gamesResults'){
            return redirect()->route('all-games-results')->with('msg','Games and Result Updated Successfully');
        }else{
            return redirect()->route('all-posts')->with('msg','Post Updated Successfully');            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        if($post->file) {
            $existing_file = public_path("frontend/assets/posts/files/".$post->category."/".$post->file);
            if(File::exists($existing_file)){
                unlink($existing_file);
            } 
        }
        if($post->image) {
            $existing_image = public_path("frontend/assets/posts/images/".$post->category."/".$post->image);
            if(File::exists($existing_image)){
                unlink($existing_image);
            } 
        }
        $post->delete();

        if($request->input('postType') == 'gamesResults'){
            return redirect()->route('all-games-results')->with('msg','Games and Result deleted Successfully');
        }else{
            return redirect()->route('all-posts')->with('msg','Post deleted Successfully');            
        }

    }
}
