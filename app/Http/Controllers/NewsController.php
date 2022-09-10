<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\File;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newses = News::orderBy('id', 'desc')->paginate(10);
        return view('admin.latest-news.index', compact('newses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.latest-news.create');
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
            'title'=>'required',
            'image'=>'required',
            'details'=>'required',
            'status'=>'required'
        ]);
        $news = new News();
        $img = $request->file('image');
        if($img){
            $name = date('dmYhis').$img->getClientOriginalName();
            $path = public_path("frontend/assets/img/latest-news/");
            $img->move($path, $name);
            $news->image = $name;
        }
        $news->title = $request->input('title');
        $news->details = $request->input('details');
        $news->status = $request->input('status');
        $news->save();
        return redirect()->route('all-news')->with('msg','News Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.latest-news.edit', compact('news'));
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
            'title'=>'required',
            'details'=>'required',
            'status'=>'required'
        ]);
        $news = News::find($id);
        $img = $request->file('image');
        if($img){
            if($news->image) {
                $existing_file = public_path("frontend/assets/img/latest-news/".$news->image);
                if(File::exists($existing_file)){
                    unlink($existing_file);
                } 
            }
            $name = date('dmYhis').$img->getClientOriginalName();
            $path = public_path("frontend/assets/img/latest-news/");
            $img->move($path, $name);
            $news->image = $name;
        }
        $news->title = $request->input('title');
        $news->details = $request->input('details');
        $news->status = $request->input('status');
        $news->save();
        return redirect()->route('all-news')->with('msg','News Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        if($news->image) {
            $existing_file = public_path("frontend/assets/img/latest-news/".$news->image);
            if(File::exists($existing_file)){
                unlink($existing_file);
            } 
        }
        $news->delete();
        return redirect()->route('all-news')->with('msg','News deleted successfully');
    }
}
