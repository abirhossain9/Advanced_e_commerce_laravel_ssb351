<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\CourseCurriculum;
use App\Models\Backend\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class CourseCurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculums = CourseCurriculum::orderBy('id','asc')->get();
        return view('backend.pages.curriculum.manage',compact('curriculums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::orderby('english_title', 'asc')->get();
        return view('backend.pages.curriculum.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curriculum = new CourseCurriculum();
        $curriculum->course_id = $request->course_id;
        $curriculum->one_en = $request->one_en;
        $curriculum->one_bn = $request->one_bn;
        $curriculum->one_desc = $request->one_desc;
        $curriculum->two_en = $request->two_en;
        $curriculum->two_bn = $request->two_bn;
        $curriculum->two_desc = $request->two_desc;
        $curriculum->three_en = $request->three_en;
        $curriculum->three_bn = $request->three_bn;
        $curriculum->three_desc = $request->three_desc;
        $curriculum->four_en = $request->four_en;
        $curriculum->four_bn = $request->four_bn;
        $curriculum->four_desc = $request->four_desc;
        $curriculum->five_en = $request->five_en;
        $curriculum->five_bn = $request->five_bn;
        $curriculum->five_desc = $request->five_desc;
        $curriculum->status = $request->status;
        $curriculum->save();
        return redirect()->route('curriculum.manage');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
