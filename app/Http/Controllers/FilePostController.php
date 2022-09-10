<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FilePost;

use Illuminate\Support\Facades\File;
use DB;

class FilePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('file_posts')->orderBy('id', 'desc')->paginate(10);
        return view('admin.file-post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $c_categories = FilePost::get('category');
        $category_string = "";
        foreach($c_categories as $c_c) {
            $category_string = $category_string.''.$c_c->category.' ';
        }
        return view('admin.file-post.create', compact(
            'category_string'
        ));
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
            'file'=>'required',
            'status'=>'required'
        ]);
        $post = new FilePost();
        $img = $request->file('file');
        if($img){
            $name = date('dmYhis').$img->getClientOriginalName();
            $path = public_path("frontend/assets/files/file-posts/".$request->input('category'));
            $img->move($path, $name);
            $post->file = $name;
        }
        $post->category = $request->input('category');
        $post->status = $request->input('status');
        $post->save();
        return redirect()->route('all-file-posts')->with('msg','File Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = FilePost::find($id);
        return view('admin.file-post.show', compact(
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
        $post = FilePost::find($id);
        return view('admin.file-post.edit', compact(
            'post',
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
            'file'=>'required',
            'status'=>'required'
        ]);
        $post = FilePost::find($id);
        $img = $request->file('file');
        if($img){
            if($post->file) {
                $existing_file = public_path("frontend/assets/files/file-posts/".$post->category."/".$post->file);
                if(File::exists($existing_file)){
                    unlink($existing_file);
                } 
            }
            $name = date('dmYhis').$img->getClientOriginalName();
            $path = public_path("frontend/assets/files/file-posts/".$request->input('category'));
            $img->move($path, $name);
            $post->file = $name;
        }
        $post->category = $request->input('category');
        $post->status = $request->input('status');
        $post->save();
        return redirect()->route('all-file-posts')->with('msg','File Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = FilePost::findOrFail($id);
        if($post->file) {
            $existing_file = public_path("frontend/assets/files/file-posts/".$post->category."/".$post->file);
            if(File::exists($existing_file)){
                unlink($existing_file);
            } 
        }
        $post->delete();
        return redirect()->route('all-file-posts')->with('msg','File Post deleted successfully');
    }
}
