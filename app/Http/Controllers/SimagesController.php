<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Simage;
use Storage;

class SimagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $simages = Simage::orderBy('position')->get();
        return view('admin.simages.index')->with('images',$simages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
          $file = $request->file('image');
          $name = 'maritelas' . time() . '.' . $file->getClientOriginalExtension();
          $path = public_path() . '/img/slider/';
          $file->move($path, $name);

          $image = new Simage;
          $image->name = $name;
          $image->title = $request->title;
          $image->subtitle = $request->subtitle;
          $image->position = $request->position;
          $image->save();
        }

        return redirect()->route('home');
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
      $cover = Simage::find($id);
      return view('admin.simages.edit')->with("cover",$cover);
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
        $cover = Simage::find($id);
        $cover->title = $request->title;
        $cover->subtitle = $request->subtitle;
        $cover->position = $request->position;
        if ($request->hasFile('image')) {
          $file = $request->file('image');
          $name = 'maritelas' . time() . '.' . $file->getClientOriginalExtension();
          $path = public_path() . '/img/slider/';
          $file->move($path, $name);

          $cover->name = $name;
        }
        $cover->save();
        return redirect()->route('simages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $simage = Simage::find($id);
        $simage->delete();

        return redirect()->route('simages.index');
    }
}
