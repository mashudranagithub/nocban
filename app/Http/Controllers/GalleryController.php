<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;
use DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.gallery.index', compact(
            'galleries'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
            'image'=>'required',
            'name'=>'required'
        ]);
        $gallery = new Gallery();
        $img = $request->file('image');
        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("frontend/assets/img/galleries_thumbnails/");
            $img->move($path, $name);
            $gallery->image = $name;
        }
        $gallery->name = $request->input('name');
        $gallery->save();
        return redirect()->route('galleries')->with('msg','Gallery Created Successfully');
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
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit', compact(
            'gallery'
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
            'name'=>'required'
        ]);
        $gallery = Gallery::find($id);
        $img = $request->file('image');
        if($img){
            if($gallery->image) {
                $existing_file = public_path("frontend/assets/img/galleries_thumbnails/".$gallery->image);
                if(File::exists($existing_file)){
                    unlink($existing_file);
                }            
            }
            $name = $img->getClientOriginalName();
            $path = public_path("frontend/assets/img/galleries_thumbnails/");
            $img->move($path, $name);
            $gallery->image = $name;
        }
        $gallery->name = $request->input('name');
        $gallery->save();
        return redirect()->route('galleries')->with('msg','Gallery Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if($gallery->image) {
            $existing_file = public_path("frontend/assets/img/galleries_thumbnails/".$gallery->image);
            if(File::exists($existing_file)){
                unlink($existing_file);
            }            
        }
        $gallery->delete();
        return redirect()->route('galleries')->with('msg','Gallery deleted successfully');
    }
}
