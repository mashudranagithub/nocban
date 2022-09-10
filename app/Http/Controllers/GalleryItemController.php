<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\GalleryItem;
use Illuminate\Support\Facades\File;
use DB;

class GalleryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('gallery_items as g_i')
                ->select('g_i.id', 'g_i.gallery_id', 'g_i.gallery_item', 'g_i.caption', 'g.name')
                ->orderBy('g_i.id', 'desc')
                ->join('galleries as g', 'g.id', '=', 'g_i.gallery_id')
                ->paginate(10);

        return view('admin.gallery-items.index', compact(
            'items',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = Gallery::get();
        return view('admin.gallery-items.create', compact(
            'galleries',
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
            'gallery_id'=>'required',
            'image'=>'required',
            'caption'=>'required'
        ]);

        $g_item = new GalleryItem();
        $g_item->gallery_id = $request->input('gallery_id');
        $img = $request->file('image');
        if($img){
            $name = date('dmYhis').$img->getClientOriginalName();
            $path = public_path("frontend/assets/img/galleries_items/".$request->gallery_id);
            $img->move($path, $name);
            $g_item->gallery_item = $name;
        }

        $g_item->caption = $request->input('caption');
        $g_item->save();
        return redirect()->route('gallery-items')->with('msg','Gallery Item Created Successfully');
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
        $galleries = Gallery::get();
        $gallery = DB::table('gallery_items as g_i')
        ->select('g_i.*')
        ->join('galleries as g', 'g.id', '=', 'g_i.gallery_id')
        ->where('g_i.id', $id)
        ->first();
        return view('admin.gallery-items.edit', compact(
            'galleries',
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
            'gallery_id'=>'required',
            'caption'=>'required'
        ]);
        
        $g_item = GalleryItem::find($id);
        $g_item->gallery_id = $request->input('gallery_id');

        $img = $request->file('image');
        if($img){
            if($g_item->gallery_item) {
                $existing_file = public_path("frontend/assets/img/galleries_items/".$request->gallery_id."/".$g_item->gallery_item);
                if(File::exists($existing_file)){
                    unlink($existing_file);
                }
            }
            $name = date('dmYhis').$img->getClientOriginalName();
            $path = public_path("frontend/assets/img/galleries_items/".$request->gallery_id);
            $img->move($path, $name);
            $g_item->gallery_item = $name;
        }
        
        $g_item->caption = $request->input('caption');

        $g_item->save();
        return redirect()->route('gallery-items')->with('msg','Gallery Item Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $g_item = GalleryItem::findOrFail($id);

        if($g_item->gallery_item) {
            $existing_file = public_path("frontend/assets/img/galleries_items/".$g_item->gallery_id."/".$g_item->gallery_item);
            if(File::exists($existing_file)){
                unlink($existing_file);
            }
        }
        $g_item->delete();
        return redirect()->route('gallery-items')->with('msg','Gallery Item deleted successfully');
    }
}
