<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use file;
use Image;

class MentrorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors = Mentor::orderBy('id','asc')->get();
        return view('backend.pages.mentor.manage',compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.mentor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mentor = new Mentor();

        $mentor->fullname  =$request->fullname;
        $mentor->designation =$request->designation;
        $mentor->slug =Str::slug($request->fullname);
        $mentor->overview =$request->overview;
        $mentor->phone =$request->phone;
        $mentor->address =$request->address;
        $mentor->email =$request->email;

        $mentor->fiverr_url =$request->fiver_url;

        $mentor->upwork_url =$request->upwork_url;

        $mentor->status =$request->status;
        if($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/mentor'.$img);
            Image::make($image)->save($location);
            $mentor->profile_pic = $img;

        }
        if($request->fiverr_img){
            $fiverr = $request->file('fiverr_img');
            $fvr = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/mentor/badge'.$fvr);
            Image::make($fiverr)->save($location);
            $mentor->fiverr_img = $fvr;
        }
        if($request->upwork_img){
            $upwork = $request->file('upwork_img');
            $upr = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/mentor/badge'.$upr);
            Image::make($upwork)->save($location);
            $mentor->upwork_img = $upr;
        }
        $mentor->save();
        return redirect()->route('mentor.manage');


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
