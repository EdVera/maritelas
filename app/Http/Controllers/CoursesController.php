<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('position')->get();
        return view('admin.courses.index')->with('courses',$courses);
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
          $imgname = 'maritelas' . time() . '.' . $file->getClientOriginalExtension();
          $path = public_path() . '/img/courses/';
          $file->move($path, $imgname);
          $wp = "Me%20gustaría%20saber%20más%20acerca%20de%20su%20curso%20".$request->name;
          $course = new Course;
          $course->name = $request->name;
          $course->description = $request->description;
          $course->position = $request->position;
          $course->whatsapp = "https://api.whatsapp.com/send?phone=584144554494&text=".$wp;
          $course->image = $imgname;
          $course->save();
        }

        return redirect()->route('courses.index');
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
        $course = Course::find($id);
        return view('admin.courses.edit')->with('course',$course);
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
      $course = Course::find($id);
      $course->fill($request->all());
      $course->position = $request->position;
      $wp = "Me%20gustaría%20saber%20más%20acerca%20de%20su%20curso%20".$request->name;
      $course->whatsapp = "https://api.whatsapp.com/send?phone=584144554494&text=".$wp;

      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imgname = 'maritelas' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/img/courses/';
        $file->move($path, $imgname);
        $course->image = $imgname;
      }

      $course->save();

      return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect()->route('courses.index');
    }
}
