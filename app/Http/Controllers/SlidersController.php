<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use DB;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate(5);
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
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
            'slider_image'=>'required',
            'slider_position'=>'required'
        ]);
        $slider = new Slider();
        $img = $request->file('slider_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("frontend/assets/img/sliders/");
            $img->move($path, $name);
            $slider->slider_image = $name;
        }

        $slider->slider_big_title = $request->input('slider_big_title');
        $slider->slider_small_title = $request->input('slider_small_title');
        $slider->slider_position = $request->input('slider_position');
        $slider->active_yn = $request->input('active_yn');
        $slider->save();
        return redirect()->route('sliders')->with('msg','Slider created Successfully');
    
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
        $slider = Slider::find($id);
        // dd($slider);
        return view('admin.sliders.edit', compact('slider'));
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
            'slider_position'=>'required'
        ]);
        $slider = Slider::find($id);
        $img = $request->file('slider_image');

        if($img){
            if($slider->slider_image) {
                $existing_file = public_path("frontend/assets/img/sliders/".$slider->slider_image);
                if(File::exists($existing_file)){
                    unlink($existing_file);
                }            
            }
            $name = $img->getClientOriginalName();
            $path = public_path("frontend/assets/img/sliders/");
            $img->move($path, $name);
            $slider->slider_image = $name;
        }

        $slider->slider_big_title = $request->input('slider_big_title');
        $slider->slider_small_title = $request->input('slider_small_title');
        $slider->slider_position = $request->input('slider_position');
        $slider->active_yn = $request->input('active_yn');
        $slider->save();
        return redirect()->route('sliders')->with('msg','Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        if($slider->slider_image) {
            $existing_file = public_path("frontend/assets/img/sliders/".$slider->slider_image);
            if(File::exists($existing_file)){
                unlink($existing_file);
            }            
        }
        $slider->delete();
        return redirect()->route('sliders')->with('msg','Slider deleted successfully');
    }
}
