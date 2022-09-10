<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Athlete;

use Illuminate\Support\Facades\File;
use DB;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('athletes')->orderBy('id', 'desc')->paginate(10);
        return view('admin.athlete.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.athlete.create');
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
            'division'=>'required',
            'category'=>'required',
            'name'=>'required',
            'athlete_id'=>'required',
            'dob'=>'required',
            'photo'=>'required',
            'status'=>'required'
        ]);
        $post = new Athlete();
        $img = $request->file('photo');
        if($img){
            $name = date('dmYhis').$img->getClientOriginalName();
            $path = public_path("frontend/assets/img/athletes/".$request->input('division').'/'.$request->input('category'));
            $img->move($path, $name);
            $post->photo = $name;
        }
        $post->athlete_id = $request->input('athlete_id');
        $post->category = $request->input('category');
        $post->division = $request->input('division');
        $post->name = $request->input('name');
        $post->dob = $request->input('dob');
        $post->status = $request->input('status');
        $post->details = $request->input('details');
        $post->save();
        return redirect()->route('all-athlete')->with('msg','Athlete Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $athlete = Athlete::find($id);
        return view('admin.athlete.show', compact(
            'athlete'
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
        $athlete = Athlete::find($id);
        return view('admin.athlete.edit', compact(
            'athlete'
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
            'division'=>'required',
            'category'=>'required',
            'name'=>'required',
            'athlete_id'=>'required',
            'dob'=>'required',
            'photo'=>'required',
            'status'=>'required'
        ]);
        $post = Athlete::find($id);
        $img = $request->file('photo');
        if($img){
            if($post->photo) {
                $existing_file = public_path("frontend/assets/img/athletes/".$post->division."/".$post->category."/".$post->photo);
                if(File::exists($existing_file)){
                    unlink($existing_file);
                } 
            }
            $name = date('dmYhis').$img->getClientOriginalName();
            $path = public_path("frontend/assets/img/athletes/".$request->input('division')."/".$request->input('category'));
            $img->move($path, $name);
            $post->photo = $name;
        }
        $post->athlete_id = $request->input('athlete_id');
        $post->category = $request->input('category');
        $post->division = $request->input('division');
        $post->name = $request->input('name');
        $post->dob = $request->input('dob');
        $post->status = $request->input('status');
        $post->details = $request->input('details');
        $post->save();
        return redirect()->route('all-athlete')->with('msg','Athlete Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Athlete::findOrFail($id);
        if($post->photo) {
            $existing_file = public_path("frontend/assets/img/athletes/".$post->division."/".$post->category."/".$post->photo);
            if(File::exists($existing_file)){
                unlink($existing_file);
            } 
        }
        $post->delete();
        return redirect()->route('all-athlete')->with('msg','Athlete deleted successfully');
    }
}
