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
        $photo_items = DB::table('gallery_items as g_i')
                ->select('g_i.id', 'g_i.gallery_id', 'g_i.gallery_item', 'g_i.caption', 'g.type')
                ->orderBy('g_i.id', 'desc')
                ->join('galleries as g', 'g.id', '=', 'g_i.gallery_id')
                ->where('g.type', 'photo')
                ->paginate(10);
        $video_items = DB::table('gallery_items as g_i')
                ->select('g_i.id', 'g_i.gallery_id', 'g_i.gallery_item', 'g_i.caption', 'g.type')
                ->orderBy('g_i.id', 'desc')
                ->join('galleries as g', 'g.id', '=', 'g_i.gallery_id')
                ->where('g.type', 'video')
                ->paginate(10);
        return view('admin.gallery-items.index', compact(
            'photo_items',
            'video_items'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photo_galleries = Gallery::where('type', 'photo')->get();
        $video_galleries = Gallery::where('type', 'video')->get();
        // dd($galleries);
        return view('admin.gallery-items.create', compact(
            'photo_galleries',
            'video_galleries'
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
        $gallery_type = Gallery::where('id',$request->gallery_id)->get('type');
        if($gallery_type[0]->type == 'photo'){        
            $this->validate($request,[
                'gallery_id'=>'required',
                'image'=>'required',
                'caption'=>'required'
            ]);
        }else{
            $this->validate($request,[
                'gallery_id'=>'required',
                'gallery_item'=>'required',
                'caption'=>'required'
            ]);
        }
        $g_item = new GalleryItem();
        $g_item->gallery_id = $request->input('gallery_id');
        $g_item->caption = $request->input('caption');
        if($gallery_type[0]->type == 'photo'){ 
            $img = $request->file('image');
            if($img){
                $name = $img->getClientOriginalName();
                $path = public_path("frontend/assets/img/galleries_items/".$gallery_type[0]->type."/".$request->gallery_id);
                $img->move($path, $name);
                $g_item->gallery_item = $name;
            }
        }else{
            $g_item->gallery_item = $request->input('gallery_item');
        }
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
        $photo_galleries = Gallery::where('type', 'photo')->get();
        $video_galleries = Gallery::where('type', 'video')->get();
        $gallery = DB::table('gallery_items as g_i')
        ->select('g_i.*', 'g.type')
        ->join('galleries as g', 'g.id', '=', 'g_i.gallery_id')
        ->where('g_i.id', $id)
        ->first();
        return view('admin.gallery-items.edit', compact(
            'photo_galleries',
            'video_galleries',
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
        $gallery_type = Gallery::where('id',$request->gallery_id)->get('type');
        if($gallery_type[0]->type == 'photo'){        
            $this->validate($request,[
                'gallery_id'=>'required',
                // 'image'=>'required',
                'caption'=>'required'
            ]);
        }else{
            $this->validate($request,[
                'gallery_id'=>'required',
                'gallery_item'=>'required',
                'caption'=>'required'
            ]);
        }
        $g_item = GalleryItem::find($id);
        $g_item->gallery_id = $request->input('gallery_id');
        $g_item->caption = $request->input('caption');
        if($gallery_type[0]->type == 'photo'){ 
            $img = $request->file('image');
            if($img){
                if($g_item->gallery_item) {
                    $existing_file = public_path("frontend/assets/img/galleries_items/".$gallery_type[0]->type."/".$request->gallery_id."/".$g_item->gallery_item);
                    if(File::exists($existing_file)){
                        unlink($existing_file);
                    }
                }
                $name = $img->getClientOriginalName();
                $path = public_path("frontend/assets/img/galleries_items/".$gallery_type[0]->type."/".$request->gallery_id);
                $img->move($path, $name);
                $g_item->gallery_item = $name;
            }
        }else{
            $g_item->gallery_item = $request->input('gallery_item');
        }
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

        $g_type = DB::table('gallery_items as g_i')
        ->select('g.type')
        ->join('galleries as g', 'g.id', '=', 'g_i.gallery_id')
        ->where('g_i.id', $id)
        ->first();
        if($g_item->gallery_item) {
            $existing_file = public_path("frontend/assets/img/galleries_items/".$g_type->type."/".$g_item->gallery_id."/".$g_item->gallery_item);
            if(File::exists($existing_file)){
                unlink($existing_file);
            }
        }
        $g_item->delete();
        return redirect()->route('gallery-items')->with('msg','Gallery Item deleted successfully');
    }
}
