@extends('frontend.layout.template')
@section('body')
<section id="home" class="pd-tp-80">
<div class="container">
    <div class="row">
       <div class="col-md-12">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Profile</a>
              <a class="nav-item nav-link" id="nav-course-tab" data-toggle="tab" href="#nav-course" role="tab" aria-controls="nav-course" aria-selected="false">Purchased Course</a>
              <a class="nav-item nav-link" id="nav-notice-tab" data-toggle="tab" href="#nav-notice" role="tab" aria-controls="nav-notice" aria-selected="false">Notice Board</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <form action="{{route('student.update',Auth::user()->id'')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="users-avatar">
                                @if (!@empty(Auth::user()->image))
                                    <img src="{{asset('backend/img/user')}}/{{Auth::user()->image}}">
                                @else
                                    <img src="{{asset('backend/img/default.jpg')}}">
                                @endif
                                <h3>{{Auth::user()->name}}</h3>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 10px;">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                            </div>
                            <div class="form-group">
                                <input type="email" disabled class="form-control" name="email" value="{{Auth::user()->email}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}" placeholder="Your Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" value="{{Auth::user()->address}}" placeholder="Your Address">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="image" >
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success custom-btn " name="update" value="Update changes">
                            </div>
                        </div>
                    </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="nav-course" role="tabpanel" aria-labelledby="nav-course-tab">..</div>
            <div class="tab-pane fade" id="nav-notice" role="tabpanel" aria-labelledby="nav-notice-tab">...</div>
          </div>
       </div>
    </div>
</div>
</section>
@endsection
