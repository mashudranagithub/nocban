<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use Illuminate\Support\Facades\File;
use DB;

class SettingsController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $settings = Settings::first();
        return view('admin.settings.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);
        $settings = Settings::first();
        $img = $request->file('logo');
        if($img){
            if(isset($settings->logo)) {
                $file_photo = public_path("frontend/assets/img/settings/logo/".$settings->logo);
                if(File::exists($file_photo)){
                    unlink($file_photo);
                }            
            }
            $name = $img->getClientOriginalName();
            $path = public_path("frontend/assets/img/settings/logo/");
            $img->move($path, $name);
            $settings->logo = $name;
        }
        $settings->facebook = $request->input('facebook');
        $settings->twitter = $request->input('twitter');
        $settings->vimeo = $request->input('vimeo');
        $settings->googleplus = $request->input('googleplus');
        $settings->youtube = $request->input('youtube');
        $settings->address = $request->input('address');
        $settings->phone = $request->input('phone');
        $settings->fax = $request->input('fax');
        $settings->email = $request->input('email');
        $settings->save();
        return redirect()->route('settings')->with('msg','Settings Updated Successfully');
    }

}
