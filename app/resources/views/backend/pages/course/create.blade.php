@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Create New Course</h4>
        <p class="mg-b-0">Add New Courses</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}
            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                    @include('backend.flash-massage')
                        <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                {{-- 1st column --}}
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Course Name [English]</label>
                                        <input type="text" name="english_title" class="form-control" required="required" autocomplete="off">
                                    </div>
                                     <div class="form-group">
                                        <label>Intro Video URL</label>
                                        <input type="text" name="intro_video" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Total Class Duration</label>
                                        <input type="text" name="course_duration" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Course Motivation</label>
                                        <textarea class="form-control" name="motivational_content" rows="4"></textarea>
                                    </div>

                                </div>
                                {{-- 2nd column --}}
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Course Name [Bangla]</label>
                                        <input type="text" name="bangla_title" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Total Graduatuation Number</label>
                                        <input type="text" name="graduate_number" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Coupon Status</label>
                                        <select class="form-control" name="cupon_status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Course Opportunity</label>
                                        <textarea class="form-control" name="course_opportunity" rows="4"></textarea>
                                    </div>
                                </div>
                                {{-- 3rd column --}}
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Price [In English]</label>
                                        <input type="text" name="price" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Total Lecture</label>
                                        <input type="text" name="total_lecture" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Course Active/Inactive Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Curriculam Descriptionn</label>
                                        <textarea class="form-control" name="curriculam_description" rows="4"></textarea>
                                    </div>

                                </div>
                                {{-- 4th column --}}
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Price [In Bengali]</label>
                                        <input type="text" name="bangla_price" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Total Class Hour</label>
                                        <input type="text" name="class_hour" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Course Thumbnail</label>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                    <div class="form-group">
                                        <label>Course Requirement</label>
                                        <textarea class="form-control" name="course_requirement" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" name="addCourse" value="Add New Course" class="btn btn-teal mg-b-10">
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
