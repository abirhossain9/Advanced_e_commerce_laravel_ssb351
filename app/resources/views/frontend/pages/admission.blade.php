@extends('frontend.layout.template') @section('body')
<section id="home" class="pd-tp-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md 3">
                <form
                    action="{{route('student.update',Auth::user()->id)}}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Full Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                value="@if(Auth::check()) {{Auth::user()->name}} @else {{ old('name') }} @endif">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                value="@if(Auth::check()) {{Auth::user()->email}} @else {{ old('email')}} @endif">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input
                                type="text"
                                class="form-control"
                                name="address"
                                value="@if(Auth::check()) {{Auth::user()->address}} @else {{ old('address') }} @endif"
                                placeholder="Your Address">
                        </div>
                        <div class="form-group">
                            <label>Phone No</label>
                            <input
                                type="text"
                                class="form-control"
                                name="phone"
                                value="@if(Auth::check()) {{Auth::user()->phone}} @else {{ old('phone') }} @endif"
                                placeholder="Your Phone No">
                        </div>
                        <div class="form-group">
                            <input
                                type="submit"
                                class="btn btn-success custom-btn "
                                name="enroll"
                                value="Make Payment">
                        </div>
                </form>
            </div>
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
        <p>House# 74 Road# 7,
            <br>Block# H, Banani, Dhaka-1213
            <br>
            Phone: 01758066329, 01758066325, 01872650686, 01872657169
        </p>
    </div>

    <div class="col-md-4">
        <h2>Mirpur Branch</h2>
        <p>HB Enterprise Bhaban.
            <br>Plot-9, Road-4, Section -7,
            <br>Mirpur-Dhaka 1216
            <br>Phone: 01872650688, 01872657167, 01872650685</p>
    </div>

    <div class="col-md-4">
        <h2>Dhanmondi Branch</h2>
        <p>House # 21/b,
            <br>Dhanmondi 27 old, New 16,
            <br>Dhaka 1205 Phone: 01870726738, 01717808205, 01872657168</p>
    </div>
</div>
</div>
</section>
@endsection
