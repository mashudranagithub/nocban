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
        $posts = DB::table('posts')->orderBy('id', 'desc')->paginate(10);
        return view('admin.posts.index', compact('posts'));
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
            $name = $file->getClientOriginalName();
            $path = public_path("frontend/assets/posts/files/".$request->input('category'));
            $file->move($path, $name);
            $post->file = $name;
        }

        $img = $request->file('image');
        if($img){
            $name = $img->getClientOriginalName();
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
        return redirect()->route('all-posts')->with('msg','Post Created Successfully');
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
            $name = $file->getClientOriginalName();
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
            $name = $img->getClientOriginalName();
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
        return redirect()->route('all-posts')->with('msg','Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
        return redirect()->route('all-posts')->with('msg','Post deleted successfully');
    }
}
