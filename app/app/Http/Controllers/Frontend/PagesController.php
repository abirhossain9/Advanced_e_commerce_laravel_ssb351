<?php

namespace App\Http\Controllers\frontend;

use App\Models\Backend\Batch;
use App\Models\Backend\Branch;
use App\Models\Backend\Course;
use App\Models\Backend\Mentor;
use App\Http\Controllers\Controller;
use App\Models\Backend\CourseCurriculum;
use Dotenv\Util\Str;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::orderBy('id','desc')->get();

        return view('frontend.pages.homepage',compact('batches'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coursedetails($slug)
    {
        $batch = Batch::orderBy('id','asc')->where('slug',$slug)->first();
        $course = Course::orderBy('id','asc')->where('id',$batch->course_id)->first();
        $course_curriculum = CourseCurriculum::where('course_id',$course->id)->first();
        if(!empty($batch)){
            return view('frontend.pages.courseDetails',compact('batch','course','course_curriculum'));
        }
    }
    public function stdLogin(){
        return view('frontend.pages.stdlogin');
    }
    public function stdRegister(){
        return view('frontend.pages.stdRegister');
    }
    public function stdDashboard(){
        return view('frontend.pages.stdDashboard');
    }
    public function admission($slug){
        $batch = Batch::orderBy('id','asc')->where('slug',$slug)->first();
        $course = Course::orderBy('id','asc')->where('id',$batch->course_id)->first();
        $course_curriculum = CourseCurriculum::where('course_id',$course->id)->first();
        $mentor = Mentor::where('id',$batch->mentor_id)->first();
        return view('frontend.pages.admission',compact('batch','course','course_curriculum'));

    }
}
