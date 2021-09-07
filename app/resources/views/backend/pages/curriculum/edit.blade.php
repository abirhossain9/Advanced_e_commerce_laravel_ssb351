@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>New Course Curriculum</h4>
        <p class="mg-b-0">Create New Course Curriculum</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                    @include('backend.flash-massage')
                        <form action="{{route('curriculum.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                {{-- Course Select --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                     <label>Course Title</label>
                                       <select class="form-control" name="course_id">
                                           <option value="0">Please Select The Course</option>
                                           @foreach ($courses as $course)
                                              <option value="{{$course->id}}"
                                                @if ($course->id == $curriculum->course_id)
                                                    selected
                                                @endif
                                                >{{$course->english_title}}</option>
                                           @endforeach
                                       </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                       <select class="form-control" name="status">
                                           <option value="2">Please Select The Status</option>
                                           <option value="1" @if ($curriculum->status == 1)
                                            selected
                                           @endif>Active</option>
                                           <option value="2" @if ($curriculum->status == 2)
                                            selected
                                           @endif>Inactive</option>
                                       </select>
                                    </div>
                                </div>
                                {{-- First step content --}}
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label>Step One Title [English]</label>
                                        <input type="text" name="one_en" class="form-control" value="{{$curriculum->one_en}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Step One Title [Bangla]</label>
                                        <input type="text" name="one_bn" class="form-control" value="{{$curriculum->one_bn}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Step One Description</label>
                                        <textarea rows="3" name="one_desc" class="form-control" required>{{$curriculum->one_desc}}</textarea>
                                    </div>
                                </div>
                                {{-- Second step content --}}
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label>Step tow Title [English]</label>
                                        <input type="text" name="two_en" class="form-control" value="{{$curriculum->one_bn}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Step tow Title [Bangla]</label>
                                        <input type="text" name="two_bn" class="form-control" value="{{$curriculum->one_bn}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Step tow Description</label>
                                        <textarea rows="3" name="two_desc" class="form-control" required>{{$curriculum->two_desc}}</textarea>
                                    </div>
                                </div>
                                {{-- Third step content --}}
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label>Step three Title [English]</label>
                                        <input type="text" name="three_en" class="form-control" value="{{$curriculum->one_bn}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Step three Title [Bangla]</label>
                                        <input type="text" name="three_bn" class="form-control" value="{{$curriculum->one_bn}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Step three Description</label>
                                        <textarea rows="3" name="three_desc" class="form-control"  required>{{$curriculum->three_desc}}</textarea>
                                    </div>
                                </div>
                                {{-- Fourth step content --}}
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label>Step four Title [English]</label>
                                        <input type="text" name="four_en" class="form-control" value="{{$curriculum->four_en}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Step four Title [Bangla]</label>
                                        <input type="text" name="four_bn" class="form-control" value="{{$curriculum->four_bn}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Step four Description</label>
                                        <textarea rows="3" name="four_desc" class="form-control" required>{{$curriculum->four_desc}}</textarea>
                                    </div>
                                </div>
                                {{-- fith step content --}}
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label>Step five Title [English]</label>
                                        <input type="text" name="five_en" class="form-control" value="{{$curriculum->five_en}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Step five Title [Bangla]</label>
                                        <input type="text" name="five_bn" class="form-control" value="{{$curriculum->five_bn}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Step five Description</label>
                                        <textarea rows="3" name="five_desc" class="form-control" required>{{$curriculum->five_desc}}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" name="addCurriculum" value="Publish Curriculum" class="custom-btn btn btn-teal mg-b-10">
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
