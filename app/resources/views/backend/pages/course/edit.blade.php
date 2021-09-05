@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update The Course Information</h4>
        <p class="mg-b-0">Update Course Informations Of this company</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                        <form action="{{route('course.update',$course->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                {{-- 1st column --}}
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Course Name [English]</label>
                                        <input type="text" name="english_title" value="{{$course->english_title}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                     <div class="form-group">
                                        <label>Intro Video URL</label>
                                        <input type="text" name="intro_video" value="{{$course->intro_video}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Total Class Duration</label>
                                        <input type="text" name="course_duration" value="{{$course->course_duration}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Course Motivation</label>
                                        <textarea class="form-control" name="motivational_content" rows="4">{{$course->motivational_content}}</textarea>
                                    </div>

                                </div>
                                {{-- 2nd column --}}
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Course Name [Bangla]</label>
                                        <input type="text" name="bangla_title" value="{{$course->bangla_title}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Total Graduatuation Number</label>
                                        <input type="text" name="graduate_number" value="{{$course->graduate_number}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Coupon Status</label>
                                        <select class="form-control" name="cupon_status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1" @if ($course->cupon_status==1)
                                                selected
                                            @endif >Active</option>
                                            <option value="2" @if ($course->cupon_status==2)
                                                selected
                                            @endif>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Course Opportunity</label>
                                        <textarea class="form-control" name="course_opportunity" rows="4">{{$course->course_opportunity}}</textarea>
                                    </div>
                                </div>
                                {{-- 3rd column --}}
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Price [In English]</label>
                                        <input type="text" name="price" class="form-control" value="{{$course->price}}" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Total Lecture</label>
                                        <input type="text" name="total_lecture" class="form-control" value="{{$course->total_lecture}}" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Course Active/Inactive Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1" @if ($course->status==1)
                                                selected
                                            @endif >Active</option>
                                            <option value="2" @if ($course->status==2)
                                                selected
                                            @endif>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Curriculam Descriptionn</label>
                                        <textarea class="form-control" name="curriculam_description" rows="4">{{$course->curriculam_description}}</textarea>
                                    </div>

                                </div>
                                {{-- 4th column --}}
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Price [In Bengali]</label>
                                        <input type="text" name="bangla_price" value="{{$course->bangla_price}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Total Class Hour</label>
                                        <input type="text" name="class_hour" value="{{$course->class_hour}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Course Thumbnail</label>
                                        <br>
                                        @if ($course->image==NULL)
                                          <img src="{{asset('backend/img/course/default.jpg')}}" alt="" width="40">
                                        @else
                                          <img src="{{asset('backend/img/course/'.$course->image)}}" alt="" width="40">
                                        @endif
                                    <br><br>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                    <div class="form-group">
                                        <label>Course Requirement</label>
                                        <textarea class="form-control" name="course_requirement" rows="4">{{$course->course_requirement}}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" name="updateCourse" value="Update Course" class="btn btn-teal mg-b-10">
                                    </div>
                                </div>
                            </div>

                        </form>
                    <!-- d-flex -->
                </div>
                <!-- d-flex -->
            </div>
            <!-- card -->

            {{-- page body content end --}}
        </div>
    </div>
</div>
@endsection
