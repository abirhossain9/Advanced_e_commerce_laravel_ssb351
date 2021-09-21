@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Create New Mentor</h4>
        <p class="mg-b-0">Add New Mentor</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                    @include('backend.flash-massage')
                        <form action="{{route('batch.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label>Batch Name</label>
                                    <input type="text" name="batch_name" class="form-control" required="required" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label>Course Name</label>
                                      <select  name="course_id" class="form-control">
                                         <option>Please Select a course</option>
                                           @foreach ($courses as $course)
                                            <option value="{{$course->id}}">{{$course->english_title}}</option>
                                           @endforeach
                                      </select>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label>Mentor Name</label>
                                    <select  name="mentor_id" class="form-control">
                                       <option>Please Select a course</option>
                                         @foreach ($mentors as $mentor)
                                            <option value="{{$mentor->id}}">{{$mentor->fullname}}</option>
                                         @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label>Branch Name</label>
                                    <select  name="branch_id" class="form-control">
                                        <option>Please Select a course</option>
                                         @foreach ($branches as $branch)
                                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                                         @endforeach
                                     </select>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label>Starting Date</label>
                                    <input type="text" name="starting_date" class="form-control" required="required" autocomplete="off">
                                </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label>Class Date</label>
                                    <input type="text" name="class_day" class="form-control" required="required" autocomplete="off">
                                </div>
                                </div>

                                <div class="col-lg-3">
                                     <div class="form-group">
                                       <label>Class Timing</label>
                                       <input type="text" name="class_timing" class="form-control" required="required" autocomplete="off">
                                     </div>
                                </div>
                                 <div class="col-lg-3">
                                    <div class="form-group">
                                    <label>Facebook Group</label>
                                    <input type="text" name="fb_group" class="form-control" required="required" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                    <label>Sit Number</label>
                                    <input type="number" name="sit_number" class="form-control" required="required" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Batch Type</label>
                                        <select class="form-control" name="batch_type">
                                            <option value="1">Please Select The Batch Type</option>
                                            <option value="1">Online Batch</option>
                                            <option value="2">Offline Batch</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Admission Status</label>
                                        <select class="form-control" name="admission_status">
                                            <option value="1">Please Select The Admission Status</option>
                                            <option value="1">Admission Going On</option>
                                            <option value="2">Admission Closed</option>
                                        </select>
                                    </div>
                                </div><div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" name="addBathc" value="Add New Batch" class="custom-btn btn btn-teal mg-b-10">
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
