@extends('frontend.layout.template')
@section('body')
<section id="home" class="pd-tp-80">
<div class="container">
    <div class="row">
       <div class="col-md-12">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="course-tab" data-toggle="tab" href="#course" role="tab" aria-controls="course" aria-selected="false">Purchased Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="notice-tab" data-toggle="tab" href="#notice" role="tab" aria-controls="notice" aria-selected="false">Notice Board</a>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
              {{-- student profile update start --}}
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <form action="{{route('student.update',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
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
                            <h4>Student Profile</h4>
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
                                <input type="submit" class="btn btn-success custom-btn " name="update" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </div>
              </form>
            </div>
            {{-- student profile update end --}}
            <div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="course-tab">Course Purchase History</div>
            <div class="tab-pane fade" id="notice" role="tabpanel" aria-labelledby="notice-tab">Notice Board</div>
          </div>
       </div>
    </div>
</div>
</section>

<section class="newsletter">
    <div class="container">
        <div class="newsletter-inner row">
            <div class="col-md-4">
                <h2>Banani Branch</h2>
                <p>House# 74 Road# 7, <br>Block# H, Banani, Dhaka-1213 <br>
                Phone: 01758066329, 01758066325, 01872650686, 01872657169 </p>
            </div>

            <div class="col-md-4">
                <h2>Mirpur Branch</h2>
                <p>HB Enterprise Bhaban. <br>Plot-9, Road-4, Section -7, <br>Mirpur-Dhaka 1216 <br>Phone: 01872650688, 01872657167, 01872650685</p>
            </div>

            <div class="col-md-4">
                <h2>Dhanmondi Branch</h2>
                <p>House # 21/b, <br>Dhanmondi 27 old, New 16, <br>Dhaka 1205 Phone: 01870726738, 01717808205, 01872657168</p>
            </div>
        </div>
    </div>
</section>
@endsection
