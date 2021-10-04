@extends('frontend.layout.template')
@section('body')
            <!-- Breadcrumb Start -->
            <section class="breadcrumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Courses</li>
                              </ol>
                            </nav>
                        </div>

                        <!-- Tab Panel Start -->
                        <div class="col-md-6">
                            <ul class="nav justify-content-end course-options" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="allCourses-tab" data-toggle="tab" href="#allCourses" role="tab" aria-controls="allCourses" aria-selected="true">All Courses</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="banani-tab" data-toggle="tab" href="#banani" role="tab" aria-controls="banani" aria-selected="false">Banani Courses</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="mirpur-tab" data-toggle="tab" href="#mirpur" role="tab" aria-controls="mirpur" aria-selected="false">Mirpur Courses</a>
                              </li>
                            </ul>
                        </div>
                        <!-- Tab Panel End -->
                    </div>
                </div>
            </section>
            <!-- Breadcrumb End -->


            <!--Begin About Us Section-->
            <section id="courses" class="courses">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Tab Content Start -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="allCourses" role="tabpanel" aria-labelledby="allCourses-tab">
                                    <!-- All Courses Start -->
                                    <h2 class="sec-title">Our Courses</h2>
                                    <div class="course-slider">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <img src="{{asset('frontend/assets/images/icons/icon-1.png')}}">
                                                <h4>Graphic Design</h4>
                                            </div>

                                            <div class="item">
                                                <img src="{{asset('frontend/assets/images/icons/icon-2.png')}}">
                                                <h4>Web Design</h4>
                                            </div>

                                            <div class="item">
                                                <img src="{{asset('frontend/assets/images/icons/icon-3.png')}}">
                                                <h4>Digital Design</h4>
                                            </div>

                                            <div class="item">
                                                <img src="{{asset('frontend/assets/images/icons/icon-4.png')}}">
                                                <h4>Full Stack Web Dev</h4>
                                            </div>

                                            <div class="item">
                                                <img src="{{asset('frontend/assets/images/icons/icon-5.png')}}">
                                                <h4>Combo GD/Web</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- All Courses End -->

                                    <!-- Banani Courses Start -->
                                    <h2 class="sec-title">Banani Branch Offered Courses</h2>
                                    <!-- Banani Courses End -->
                                    <div class="row">
                                        <!-- Course Start -->
                                        <div class="col-md-4">
                                            <!-- Course List Start -->
                                            <div class="course-item">
                                                <div class="course-item-img">
                                                    <div class="coutse-type-offline">Offline</div>
                                                    <a href="">
                                                        <img src="{{asset('frontend/assets/images/webdev.png')}}" alt="">
                                                    </a>
                                                    <a href="" class="course-link">+</a>
                                                </div>

                                                <div class="course-summary box">

                                                    <div class="course-summary-inner">
                                                        <h4>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট</h4>
                                                        <ul class="course-meta">
                                                            <li>
                                                                <span>Mentor: </span>
                                                                <span class="green-highlight">Faisal Hamid Hemel</span>
                                                            </li>
                                                            <li>
                                                                <span>Classes: </span>
                                                                <span class="blue-highlight">24</span>
                                                                <span>Hours: </span>
                                                                <span class="blue-highlight">96</span>
                                                            </li>
                                                            <li>
                                                                <span>Seats Left: </span>
                                                                <span class="blue-highlight">50</span>
                                                            </li>
                                                        </ul>

                                                        <a href="" class="btn btn-entroll">Enroll Now</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Course List End -->
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <!-- Row End -->

                                    <!-- Banani Courses Start -->
                                    <h2 class="sec-title">Mirpur Branch Offered Courses</h2>
                                    <!-- Banani Courses End -->
                                    <div class="row">
                                        <!-- Course Start -->
                                        <div class="col-md-4">
                                            <!-- Course List Start -->
                                            <div class="course-item">
                                                <div class="course-item-img">
                                                    <div class="coutse-type-offline">Offline</div>
                                                    <a href="">
                                                        <img src="{{asset('frontend/assets/images/webdev.png')}}" alt="">
                                                    </a>
                                                    <a href="" class="course-link">+</a>
                                                </div>

                                                <div class="course-summary box">

                                                    <div class="course-summary-inner">
                                                        <h4>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট</h4>
                                                        <ul class="course-meta">
                                                            <li>
                                                                <span>Mentor: </span>
                                                                <span class="green-highlight">Faisal Hamid Hemel</span>
                                                            </li>
                                                            <li>
                                                                <span>Classes: </span>
                                                                <span class="blue-highlight">24</span>
                                                                <span>Hours: </span>
                                                                <span class="blue-highlight">96</span>
                                                            </li>
                                                            <li>
                                                                <span>Seats Left: </span>
                                                                <span class="blue-highlight">50</span>
                                                            </li>
                                                        </ul>

                                                        <a href="" class="btn btn-entroll">Enroll Now</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Course List End -->
                                        </div>
                                        <!-- Course End -->

                                        <!-- Course Start -->
                                        <div class="col-md-4">
                                            <!-- Course List Start -->
                                            <div class="course-item">
                                                <div class="course-item-img">
                                                    <div class="coutse-type-online">Offline</div>
                                                    <a href="">
                                                        <img src="{{asset('frontend/assets/images/webdev.png')}}" alt="">
                                                    </a>
                                                    <a href="" class="course-link">+</a>
                                                </div>

                                                <div class="course-summary box">

                                                    <div class="course-summary-inner">
                                                        <h4>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট</h4>
                                                        <ul class="course-meta">
                                                            <li>
                                                                <span>Mentor: </span>
                                                                <span class="green-highlight">Faisal Hamid Hemel</span>
                                                            </li>
                                                            <li>
                                                                <span>Classes: </span>
                                                                <span class="blue-highlight">24</span>
                                                                <span>Hours: </span>
                                                                <span class="blue-highlight">96</span>
                                                            </li>
                                                            <li>
                                                                <span>Seats Left: </span>
                                                                <span class="blue-highlight">50</span>
                                                            </li>
                                                        </ul>

                                                        <a href="" class="btn btn-entroll">Enroll Now</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Course List End -->
                                        </div>
                                        <!-- Course End -->
                                    </div>
                                    <!-- Row End -->

                                </div>

                                <div class="tab-pane fade" id="banani" role="tabpanel" aria-labelledby="banani-tab">
                                    <!-- Banani Courses Start -->
                                    <h2 class="sec-title">Banani Branch Offered Courses</h2>
                                    <!-- Banani Courses End -->
                                    <div class="row">
                                        <!-- Course Start -->
                                        <div class="col-md-4">
                                            <!-- Course List Start -->
                                            <div class="course-item">
                                                <div class="course-item-img">
                                                    <div class="coutse-type-offline">Offline</div>
                                                    <a href="">
                                                        <img src="{{asset('frontend/assets/images/webdev.png')}}" alt="">
                                                    </a>
                                                    <a href="" class="course-link">+</a>
                                                </div>

                                                <div class="course-summary box">

                                                    <div class="course-summary-inner">
                                                        <h4>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট</h4>
                                                        <ul class="course-meta">
                                                            <li>
                                                                <span>Mentor: </span>
                                                                <span class="green-highlight">Faisal Hamid Hemel</span>
                                                            </li>
                                                            <li>
                                                                <span>Classes: </span>
                                                                <span class="blue-highlight">24</span>
                                                                <span>Hours: </span>
                                                                <span class="blue-highlight">96</span>
                                                            </li>
                                                            <li>
                                                                <span>Seats Left: </span>
                                                                <span class="blue-highlight">50</span>
                                                            </li>
                                                        </ul>

                                                        <a href="" class="btn btn-entroll">Enroll Now</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Course List End -->
                                        </div>
                                        <!-- Course End -->

                                        <!-- Course Start -->
                                        <div class="col-md-4">
                                            <!-- Course List Start -->
                                            <div class="course-item">
                                                <div class="course-item-img">
                                                    <div class="coutse-type-online">Offline</div>
                                                    <a href="">
                                                        <img src="{{asset('frontend/assets/images/webdev.png')}}" alt="">
                                                    </a>
                                                    <a href="" class="course-link">+</a>
                                                </div>

                                                <div class="course-summary box">

                                                    <div class="course-summary-inner">
                                                        <h4>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট</h4>
                                                        <ul class="course-meta">
                                                            <li>
                                                                <span>Mentor: </span>
                                                                <span class="green-highlight">Faisal Hamid Hemel</span>
                                                            </li>
                                                            <li>
                                                                <span>Classes: </span>
                                                                <span class="blue-highlight">24</span>
                                                                <span>Hours: </span>
                                                                <span class="blue-highlight">96</span>
                                                            </li>
                                                            <li>
                                                                <span>Seats Left: </span>
                                                                <span class="blue-highlight">50</span>
                                                            </li>
                                                        </ul>

                                                        <a href="" class="btn btn-entroll">Enroll Now</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Course List End -->
                                        </div>
                                        <!-- Course End -->
                                    </div>
                                    <!-- Row End -->
                                </div>

                                <div class="tab-pane fade" id="mirpur" role="tabpanel" aria-labelledby="mirpur-tab">
                                    <!-- Mirpur Courses Start -->
                                    <h2 class="sec-title">Mirpur Branch Offered Courses</h2>
                                    <!-- Mirpur Courses End -->
                                    <div class="row">
                                        <!-- Course Start -->
                                        <div class="col-md-4">
                                            <!-- Course List Start -->
                                            <div class="course-item">
                                                <div class="course-item-img">
                                                    <div class="coutse-type-offline">Offline</div>
                                                    <a href="">
                                                        <img src="{{asset('frontend/assets/images/webdev.png')}}" alt="">
                                                    </a>
                                                    <a href="" class="course-link">+</a>
                                                </div>

                                                <div class="course-summary box">

                                                    <div class="course-summary-inner">
                                                        <h4>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট</h4>
                                                        <ul class="course-meta">
                                                            <li>
                                                                <span>Mentor: </span>
                                                                <span class="green-highlight">Faisal Hamid Hemel</span>
                                                            </li>
                                                            <li>
                                                                <span>Classes: </span>
                                                                <span class="blue-highlight">24</span>
                                                                <span>Hours: </span>
                                                                <span class="blue-highlight">96</span>
                                                            </li>
                                                            <li>
                                                                <span>Seats Left: </span>
                                                                <span class="blue-highlight">50</span>
                                                            </li>
                                                        </ul>

                                                        <a href="" class="btn btn-entroll">Enroll Now</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Course List End -->
                                        </div>
                                        <!-- Course End -->

                                        <!-- Course Start -->
                                        <div class="col-md-4">
                                            <!-- Course List Start -->
                                            <div class="course-item">
                                                <div class="course-item-img">
                                                    <div class="coutse-type-online">Offline</div>
                                                    <a href="">
                                                        <img src="{{asset('frontend/assets/images/webdev.png')}}" alt="">
                                                    </a>
                                                    <a href="" class="course-link">+</a>
                                                </div>

                                                <div class="course-summary box">

                                                    <div class="course-summary-inner">
                                                        <h4>ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট</h4>
                                                        <ul class="course-meta">
                                                            <li>
                                                                <span>Mentor: </span>
                                                                <span class="green-highlight">Faisal Hamid Hemel</span>
                                                            </li>
                                                            <li>
                                                                <span>Classes: </span>
                                                                <span class="blue-highlight">24</span>
                                                                <span>Hours: </span>
                                                                <span class="blue-highlight">96</span>
                                                            </li>
                                                            <li>
                                                                <span>Seats Left: </span>
                                                                <span class="blue-highlight">50</span>
                                                            </li>
                                                        </ul>

                                                        <a href="" class="btn btn-entroll">Enroll Now</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Course List End -->
                                        </div>
                                        <!-- Course End -->
                                    </div>
                                    <!-- Row End -->
                                </div>
                            </div>
                            <!-- Tab Content End -->


                        </div>
                    </div>

                </div>
            </section>
            <!--End About Us Section-->
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
