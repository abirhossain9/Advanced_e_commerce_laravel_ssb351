
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Shikhbe Shobai | Landing Page</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme Main CSS File -->
   <link rel="stylesheet" href="{{asset('frontend/assets/css/course.css')}}">
  </head>

  <body>
    <!-- Header Section Start -->
    <header class="ln-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <!-- Logo Start -->
              <a class="navbar-brand" href="#">
                <img src="{{asset('frontend/assets/images/details/logo.png')}}" class="logo">
              </a>
              <!-- Logo End -->

              <!-- Responsive Nav Button Start -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- Responsive Nav Button End -->

              <!-- Navigation Menu Start -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">আমাদের ক্যাম্পাস <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mobile-hidden" href="#">কোর্স সমূহ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mobile-hidden" href="#">যোগাযোগ করুন</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn-header mobile-hidden" data-toggle="modal" data-target="#admission">ভর্তি হোন</a>
                  </li>
                  <!-- Desktop Hidden - Mobile Visible Start -->
                  <li class="nav-item desk-hidden">
                    <a class="nav-link js-scroll-trigger" href="#course-details">কোর্সের বিস্তারিত</a>
                  </li>
                  <li class="nav-item desk-hidden">
                    <a class="nav-link js-scroll-trigger" href="#course-curriculum">কোর্স কারিকুলাম</a>
                  </li>
                  <li class="nav-item desk-hidden">
                    <a class="nav-link js-scroll-trigger" href="#course-for-you">কোর্সটা কি আপনার জন্য?</a>
                  </li>
                  <li class="nav-item desk-hidden">
                    <a class="nav-link js-scroll-trigger" href="#support-mentor">সাপোর্ট সেন্টার</a>
                  </li>
                  <li class="nav-item desk-hidden">
                    <a class="nav-link js-scroll-trigger" href="#student-work">আমাদের স্টুডেন্টরা কি করছেন</a>
                  </li>
                  <li class="nav-item desk-hidden">
                    <a class="nav-link js-scroll-trigger" href="#course-mentor">কোর্স মেন্টর্স</a>
                  </li>
                  <li class="nav-item desk-hidden">
                    <a class="nav-link js-scroll-trigger" href="#news-coverage">নিউস কাভারেজ</a>
                  </li>
                  <li class="nav-item desk-hidden">
                    <a class="nav-link js-scroll-trigger" href="#how-to-get-start">কিভাবে শুরু করবেন?</a>
                  </li>
                  <li class="nav-item desk-hidden">
                    <a class="nav-link js-scroll-trigger" href="#contact-us">যোগাযোগ করুন</a>
                  </li>
                  <!-- Desktop Hidden - Mobile Visible End -->
                </ul>
              </div>
              <!-- Navigation Menu End -->
            </nav>
          </div>
        </div>
      </div>

      <!-- Banner Section Start -->
      <div class="container landing-banner">
        <div class="row">
          <!-- Banner Left Content Start -->
          <div class="col-md-5 col-sm-12 col-12">
            <!-- Banner Heading Text -->
            <h1><span>{{$batch->course->bangla_title}}</h1>

            <!-- Banner Course Short Info Text -->
            <div class="ln-course-info">
              <ul>
                <li>কোর্সের মেয়াদ : <span>৬ মাস</span></li>
                <li>কোর্স ফী : <span>১৫,০০০</span></li>
                <li>ক্লাসের সময় : <span>শুক্রবার রাত ১০টা</span></li>
                <li>ক্লাস শুরুর তারিখ : <span>শুক্রবার, ১৫ মে*</span></li>
              </ul>
            </div>

            <!-- Banner Paragraph Text -->
            <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও।</p>

            <!-- Banner Button Content -->
            <div class="ln-banner-btn">
              <ul>
                <li>
                  <a href="" class="btn-banner-one" data-toggle="modal" data-target="#admission">ভর্তি হোন</a>
                </li>
                <li>
                  <a href="" class="btn-banner-two"><i class="fa fa-download"></i> সিলেবাস</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Banner Left Content End -->

          <!-- Banner Right Content Start -->
          <div class="col-md-7 col-sm-12 col-12">
            <img src="{{asset('frontend/assets/images/details/banner-bg.png')}}" class="img-fluid">
          </div>
          <!-- Banner Right Content End -->
        </div>
      </div>
      <!-- Banner Section End -->
    </header>
    <!-- Header Section End -->


    <!-- Landing Page Tab Area Section Start -->
    <section class="ln-tab-area" id="course-details">
      <div class="container">
        <div class="row">
          <!-- Left Side Tab Panel Start -->
          <div class="col-md-3">
            <div class="ln-tab-panel" id="sticky">
              <!-- Tab Logo -->
              <img src="{{asset('frontend/assets/images/details/logo.png')}}" class="tab-logo">

              <!-- Tab Options Start -->
              <div class="ln-tab-options">
                <ul>
                  <li><a class="js-scroll-trigger" href="#course-details">কোর্সের বিস্তারিত</a></li>
                  <li><a class="js-scroll-trigger" href="#course-curriculum">কোর্স কারিকুলাম</a></li>
                  <li><a class="js-scroll-trigger" href="#course-for-you">কোর্সটা কি আপনার জন্য?</a></li>
                  <li><a class="js-scroll-trigger" href="#support-mentor">সাপোর্ট সেন্টার</a></li>
                  <li><a class="js-scroll-trigger" href="#student-work">আমাদের স্টুডেন্টরা কি করছেন</a></li>
                  <li><a class="js-scroll-trigger" href="#course-mentor">কোর্স মেন্টর্স</a> </li>
                  <li><a class="js-scroll-trigger" href="#news-coverage">নিউস কাভারেজ</a> </li>
                  <li><a class="js-scroll-trigger" href="#how-to-get-start">কিভাবে শুরু করবেন?</a></li>
                  <li><a class="js-scroll-trigger" href="#contact-us">যোগাযোগ করুন</a></li>
                </ul>
              </div>

              <!-- Tab Button -->
              <a href="#" class="tab-btn btn-block" data-toggle="modal" data-target="#admission">ভর্তি হোন</a>
              <!-- Tab Options End -->
            </div>
          </div>
          <!-- Left Side Tab Panel End -->


          <!-- Right Side Tab Content Start -->
          <div class="col-md-8 offset-md-1 ln-course-details" >
            <!-- Section Title -->
            <h2>ফুল স্ট্যাক <span class="blue-shadow">ওয়েব ডেভেলপমেন্ট </span></h2>

            <!-- Section paragraph -->
            <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও।ছিদ্রান্বেষণ? না, তা হবে কেন?</p>

            <div class="row">
              <!-- Course Details Video -->
              <div class="col-md-8">
                <div class="ln-course-details-video">
                  <!-- Video Thumbnail -->
                  <img src="{{asset('frontend/assets/images/details/course-details-video.png')}}" class="img-fluid">
                  <!-- Hover Content -->
                  <div class="ln-course-details-video-hover">
                    <p><i class="fa fa-play"></i>কোর্স ডিটেলস ভিডিও</p>
                  </div>
                </div>
              </div>

              <!-- Course Details Summary -->
              <div class="col-md-4 mt-50">
                <div class="ln-course-details-summary">
                  <h2>২০০০+</h2>
                  <h4>গ্রাডুয়েটস</h4>

                  <h2>৪৮ ঘন্টা</h2>
                  <h4>ক্লাস আওয়ার্স</h4>

                  <h2>২৪</h2>
                  <h4>লেকচার</h4>

                  <h2>২৪/৭</h2>
                  <h4>অনলাইন সাপোর্ট</h4>
                </div>
              </div>
            </div>
          </div>
          <!-- Right Side Tab Content End -->
        </div>
      </div>
    </section>
    <!-- Landing Page Tab Area Section End -->


    <!-- Course Details Section Start -->
    <section class="ln-course-curriculum-section" id="course-curriculum">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4 col-sm-12 col-12">
            <!-- Section Title -->
            <h2>আমাদের <span class="green-shadow"> কোর্স কারিকুলাম </span></h2>

            <!-- Section paragraph -->
            <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও।ছিদ্রান্বেষণ? না, তা হবে কেন?</p>

            <!-- Step Process Wrapper Start -->
            <div class="process-wrapper">
              <!-- Progress Bar Container Start -->
              <div id="progress-bar-container">
                <!-- Step Heading Start -->
                <ul>
                  <li class="step step01 active">
                    <div class="step-inner">ইলাস্ট্রেটর</div>
                    <p>১ মাস</p>
                  </li>

                  <li class="step step02">
                    <div class="step-inner">ফটোশপ</div>
                    <p>১ মাস</p>
                  </li>

                  <li class="step step03">
                    <div class="step-inner">ক্লাস প্রজেক্ট</div>
                    <p>১ মাস</p>
                  </li>

                  <li class="step step04">
                    <div class="step-inner">ফ্রীল্যান্সিং</div>
                    <p>১ মাস</p>
                  </li>

                  <li class="step step05">
                    <div class="step-inner">লাইফলং লার্নিং</div>
                    <p>১ মাস</p>
                  </li>
                </ul>
                <!-- Step Heading End -->
                <div id="line">
                  <div id="line-progress"></div>
                </div>
              </div>
              <!-- Progress Bar Container End -->

              <!-- Progress Bar Percent Counter Start -->
              <div class="progress-percent-counter">
                <ul>
                  <li>০%</li>
                  <li>২৫%</li>
                  <li>৫০%</li>
                  <li>৭৫%</li>
                  <li>১০০%</li>
                </ul>
              </div>
              <!-- Progress Bar Percent Counter End -->

              <!-- Progress Content Section Start -->
              <div id="progress-content-section">
                <!-- Step One Content -->
                <div class="section-content content01 active">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ইলাস্ট্রেটর</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ইলাস্ট্রেটর</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ইলাস্ট্রেটর</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ইলাস্ট্রেটর</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>
                  </div>
                </div>


                <!-- Step Two Content -->
                <div class="section-content content02">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ফটোশপ</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ফটোশপ</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ফটোশপ</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ফটোশপ</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>
                  </div>
                </div>

                <!-- Step Three Content -->
                <div class="section-content content03">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ক্লাস প্রজেক্ট</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ক্লাস প্রজেক্ট</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ক্লাস প্রজেক্ট</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ক্লাস প্রজেক্ট</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>
                  </div>
                </div>

                <!-- Step Four Content-->
                <div class="section-content content04">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ফ্রীল্যান্সিং</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ফ্রীল্যান্সিং</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ফ্রীল্যান্সিং</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>ফ্রীল্যান্সিং</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>
                  </div>
                </div>

                <!-- Step Five Content -->
                <div class="section-content content05">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>লাইফলং লার্নিং</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>লাইফলং লার্নিং</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>লাইফলং লার্নিং</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                      <h3>লাইফলং লার্নিং</h3>
                      <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Progress Content Section End -->

            </div>
            <!-- Step Process Wrapper End -->
          </div>
        </div>
      </div>
    </section>
    <!-- Course Details Section End -->


    <!-- Course For Whoom Section Start -->
    <section class="course-for-whoom" id="course-for-you">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>কোর্সটা কি <span class="blue-shadow"> আপনার জন্য? </span></h2>

            <!-- Section paragraph -->
            <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। </p>

            <div class="row">
              <!-- Left Side Images -->
              <div class="col-md-6">
                <img src="{{asset('frontend/assets/images/details/women-wearing.png')}}" class="image-one">
                <img src="{{asset('frontend/assets/images/details/women-wearing.png')}}" class="image-two">
                <img src="{{asset('frontend/assets/images/details/women-wearing.png')}}" class="image-three">
              </div>

              <!-- Right Side Content -->
              <div class="col-md-6">
                <!-- FAQ One -->
                <div class="faq-qa">
                  <h3>আপনি কি একজন শিক্ষার্থী?</h3>
                  <p>পড়াশোনার পাশাপাশি আইটি কাজের বাস্তবমুখী শিক্ষা একজন শিক্ষার্থীর বর্তমান এবং ভবিষ্যতকে উজ্জ্বল করবে এবং বিভিন্ন সুযোগ সুবিধা বা কাজের সুযোগ করে দিবে এতে কোন সন্দেহ নেই। বরং পড়াশোনার পাশাপাশি অনেক শিক্ষার্থী বিভিন্ন খন্ডকালিন কাজ করতে চান। আইটি কোন কাজে দক্ষ হলে একজন শিক্ষার্থী পড়াশোনার পাশাপাশি আন্তর্জাতিক মার্কেটে কাজ করতে পারেন এবং নিজের পড়াশোনার খরচ নিজেই বহন করতে পারেন।</p>
                </div>

                <!-- FAQ Two -->
                <div class="faq-qa">
                  <h3>আপনি কি একজন গৃহিণী?</h3>
                  <p>অনেক শিক্ষিত গৃহিণী গৃহস্থালির কাজের পাশাপাশি কোন কাজ করে আয় করতে চান। কিন্তু তারা চাইলেও নানা সমস্যার কারণে কোন চাকুরী বা ব্যাবসায় যুক্ত হতে পারেন না। তাদের জন্য ফ্রিল্যান্সিং হতে পারে সবচেয়ে উপযুক্ত একটি মাধ্যম। একজন গৃহিণী আইটি দক্ষতা অর্জন করে প্রতিদিন বা সুবিধা মত সময়ে কাজ করে আয় এবং নিজের একটি পরিচয় তৈরি করতে পারেন।</p>
                </div>

                <!-- FAQ Three -->
                <div class="faq-qa">
                  <h3>আপনি কি একজন চাকুরীজীবী?</h3>
                  <p>বর্তমানে চাকুরী করে অনেকেই হয়তো নিজের সকল প্রয়োজন মেটাতে হিমিশিম খাচ্ছে। অনেকে হয়তো চাকুরীই করতে চাচ্ছেন না, নিজের কিছু করতে চাচ্ছেন। অনেকে হয়তো চাকুরীর পরের সময় গুলো কাজে লাগাতে চাচ্ছেন। প্রতিদিন ৩/৪ ঘণ্টা সময় দিলে শিখবে সবাই এর যে কোন আইটি কোর্সের মাধ্যমে কাজ শিখে ফ্রিল্যান্সিং করে আপনার বাড়তি আয়ের চাহিদা মেটানো সম্ভব।</p>
                </div>

                <!-- FAQ Four -->
                <div class="faq-qa">
                  <h3>আপনি কি একজন উদ্যোক্তা?</h3>
                  <p>আপনি যে কোন ব্যাবসা করেন না কেনো, আপনার বিভিন্ন আইটি কাজের প্রয়োজন হবেই। আপনার নিজের যদি ভালো কাজের আইডিয়া থাকে তবে সেটা অন্যের মাধ্যমে সফলভাবে সম্পন্ন করতে পারবেন। কিন্তু আপনি নিজে যদি কোন আইটি দক্ষতা না রাখেন, তাহলে বর্তমান সময়ে যে কোন ব্যাবসা বা নতুন কোন আইডিয়া নিয়ে কাজ করলে সাফল্য অর্জন করা খুবই কঠিন হয়ে যাবে।</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Course For Whoom Section End -->


    <!-- Student Support System Section Start -->
    <section class="std-support-system" id="support-mentor">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>শিক্ষার্থীদের জন্য <span class="blue-shadow"> বিশেষ সাপোর্ট ব্যাবস্থা </span></h2>

            <!-- Section paragraph -->
            <p>শিক্ষার্থীরা বিভিন্ন সময়ে বিভিন্ন টপিক ক্লাসের পরেও আরো বিস্তারিত জানতে চায়। ক্লাসে দেয়া এ্যাসাইনমেন্ট করার সময় কোন জায়গায় আটকে যেতে পারে। এই সময় একটু সাপোর্ট হলে তারা কাজ সফলভাবে সম্পন্ন করতে পারেন। আবার কোর্স শেষে ক্লায়েন্ট এর কাজ করার সময়েও সাপোর্ট প্রয়োজন হয়। তাই শিখবে সবাই তার সকল শিক্ষার্থীদের জন্য বিশেষ সাপোর্ট ব্যাবস্থার আয়োজন রেখেছে। এই সাপোর্ট লাইফটাইম সম্পুর্ন বিনামূল্যে প্রদান করা হবে।</p>

            <!-- Support Content Start -->
            <div class="row">
              <div class="col-md-3 std-support-system-content">
                <img src="{{asset('frontend/assets/images/details/support.png')}}" class="img-fluid std-support-system-img">
              </div>
              <div class="col-md-9 std-support-system-content">
                <h3>অনলাইন লাইভ সাপোর্ট </h3>
                <p>শিখবে সবাই এর যে কোন শিক্ষার্থী, সে অনলাইন লাইভ কোর্সের হোক কিংবা অফলাইন কোর্সের হোক। শিখবে সবাই এর যে কোন ক্যাম্পাসে সকাল ৯টা থেকে বিকেল ৫ টা পর্যন্ত সাপোর্টের জন্য আসতে পারবেন। ক্যাম্পাসে সাপোর্ট সেন্টারে বসে মেন্টর এর কাছ থেকে সরাসরি কাজ বুঝে নেওয়া যাবে।</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 std-support-system-content">
                <img src="{{asset('frontend/assets/images/details/support.png')}}" class="img-fluid std-support-system-img">
              </div>
              <div class="col-md-9 std-support-system-content">
                <h3>অনলাইন লাইভ সাপোর্ট </h3>
                <p>শিখবে সবাই এর যে কোন শিক্ষার্থী, সে অনলাইন লাইভ কোর্সের হোক কিংবা অফলাইন কোর্সের হোক। শিখবে সবাই এর যে কোন ক্যাম্পাসে সকাল ৯টা থেকে বিকেল ৫ টা পর্যন্ত সাপোর্টের জন্য আসতে পারবেন। ক্যাম্পাসে সাপোর্ট সেন্টারে বসে মেন্টর এর কাছ থেকে সরাসরি কাজ বুঝে নেওয়া যাবে।</p>
              </div>
            </div>
            <!-- Support Content End -->
          </div>
        </div>
      </div>
    </section>
    <!-- Student Support System Section End -->


    <!-- Student Success Stories Section Start -->
    <section class="ln-std-success-stories" id="student-work">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>আমাদের <span class="green-shadow"> শিক্ষার্থীদের সফলতার গল্প </span></h2>

            <!-- Section paragraph -->
            <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>

            <!-- Student Success Slider Start -->
            <div class="success-slider owl-carousel owl-theme">
              <!-- Slider Item One -->
              <div class="item">
                <div class="row">
                  <div class="col-md-5">
                    <img src="{{asset('frontend/assets/images/details/std-slider.png')}}" class="img-fluid">
                  </div>
                  <div class="col-md-7">
                    <div class="slider-content">
                      <h2>সাদিয়া জামান ফারাহ</h2>
                      <h3>ফুল স্ট্যাক ওয়েব ডেভেলপার</h3>
                      <h3>ফাইভার <span>লেভেল ২ সেলার</span></h3>

                      <p><i class="fa fa-quote-left"></i> অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও।  অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও।</p>

                      <a href="#" class="btn-slider">প্রমাণ দেখুন</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slider Item Two -->
              <div class="item">
                <div class="row">
                  <div class="col-md-5">
                    <img src="{{asset('frontend/assets/images/details/std-slider.png')}}" class="img-fluid">
                  </div>
                  <div class="col-md-7">
                    <div class="slider-content">
                      <h2>সাদিয়া জামান ফারাহ</h2>
                      <h3>ফুল স্ট্যাক ওয়েব ডেভেলপার</h3>
                      <h3>ফাইভার <span>লেভেল ২ সেলার</span></h3>

                      <p><i class="fa fa-quote-left"></i> অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও।  অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও।</p>

                      <a href="#" class="btn-slider">প্রমাণ দেখুন</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slider Item Three -->
              <div class="item">
                <div class="row">
                  <div class="col-md-5">
                    <img src="{{asset('frontend/assets/images/details/std-slider.png')}}" class="img-fluid">
                  </div>
                  <div class="col-md-7">
                    <div class="slider-content">
                      <h2>সাদিয়া জামান ফারাহ</h2>
                      <h3>ফুল স্ট্যাক ওয়েব ডেভেলপার</h3>
                      <h3>ফাইভার <span>লেভেল ২ সেলার</span></h3>

                      <p><i class="fa fa-quote-left"></i> অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও।  অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও।</p>

                      <a href="#" class="btn-slider">প্রমাণ দেখুন</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Student Success Slider End -->
          </div>
        </div>
      </div>
    </section>
    <!-- Student Success Stories Section End -->


    <!-- Where Student Works Section Start -->
    <section class="where-students-worked">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>আমাদের শিক্ষার্থীরা <span class="blue-shadow"> কোথায় কাজ করেন? </span></h2>

            <!-- Section paragraph -->
            <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>

            <!-- Working At Fiverr -->
            <div class="row mt-35">
              <div class="col-md-3 std-working-at">
                <img src="{{asset('frontend/assets/images/details/support.png')}}" class="img-fluid std-working-at-img">
              </div>
              <div class="col-md-9 std-working-at">
                <h3>ফাইভার</h3>
                <p>নতুন শিক্ষার্থীদের জন্য ফাইভার মার্কেটপ্লেস খুবই জনপ্রিয়। কারন এখানে নতুনরা সহজেই ছোট ছোট কাজ দিয়ে নিজের ফ্রিল্যান্সিং ক্যারিয়ার শুরু করতে পারেন। এখানে কাজের নির্দিষ্ট প্যাকেজ বা গিগ করা থাকে যা ক্ল্যায়েন্ট এবং ফ্রিল্যান্সার উভয়ের জন্যই সুবিধাজনক।</p>
              </div>
            </div>

            <!-- Working At Upwork -->
            <div class="row mt-35">
              <div class="col-md-3 std-working-at">
                <img src="{{asset('frontend/assets/images/details/support.png')}}" class="img-fluid std-working-at-img">
              </div>
              <div class="col-md-9 std-working-at">
                <h3>আপওয়ার্ক</h3>
                <p>আপওয়ার্ক একটি বড় আন্তর্জাতিক কাজের বাজার। এখানে বড় বড় কোম্পানি গুলো আউটসোর্সিং করে কাজ করায়। আমাদের অনেক শিক্ষার্থী এই মার্কেটে টপ রেটেড ফ্রিল্যান্সার হিসেবে কাজ করছেন। তুলনামূলক এখানে কাজের মূল্য একটু বেশী পাওয়া যায়।</p>
              </div>
            </div>

            <!-- Working At Remote Job -->
            <div class="row mt-35">
              <div class="col-md-3 std-working-at">
                <img src="{{asset('frontend/assets/images/details/support.png')}}" class="img-fluid std-working-at-img">
              </div>
              <div class="col-md-9 std-working-at">
                <h3>রিমোট জব</h3>
                <p>বিভিন্ন মার্কেটপ্লেসে ভালো মানের কাজ সরবরাহ করার ফলে আমাদের শিক্ষার্থীদের সাথে ক্লায়েন্ট এর অনেক ভালো সম্পর্ক তৈরি হয়ে যায়। মার্কেটপ্লেসের বাইরেও সোশ্যাল মিডিয়ার মাধ্যমে অনেক ক্লায়েন্ট এর কাজ করে থাকেন আমাদের শিক্ষার্থীরা। এর ফলে অনেক ক্ল্যায়েন্ট মাসিক চুক্তি করে কাজ করায় যেটা চাকুরীর মতো।</p>
              </div>
            </div>

            <!-- Working At Remote Job -->
            <div class="row mt-35">
              <div class="col-md-3 std-working-at">
                <img src="{{asset('frontend/assets/images/details/support.png')}}" class="img-fluid std-working-at-img">
              </div>
              <div class="col-md-9 std-working-at">
                <h3>লোকাল জব</h3>
                <p>আন্তর্জাতিক বাজার ছাড়াও বাংলাদেশেও কিন্তু আইটির বিভিন্ন কাজ থাকে। মূলত দেশীয় ছোট এবং মাঝারী ব্যাবসায়ি প্রতিষ্ঠান গুলো আউটসোর্সিং করেই কাজ করায়। আমাদের অনেক শিক্ষার্থী এরকম লোকাল অনেক কাজ করে থাকেন। এখন মোবাইল ব্যাংকিং এর মাধ্যমে সহজেই পেমেন্ট নেওয়া যায়। আবার চাইলে সরাসরি কথা বলেও অনেকে লোকাল বিভিন্ন প্রজেক্টে কাজ করছেন। এখানে সুবিধা হচ্ছে কাউকে কোন কমিশন দিতে হয় না যেটা উপরের সকল মাধ্যমেই প্রযোজ্য।</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Where Student Works Section End -->


    <!-- News Coverage Section Start -->
    <section class="ln-news-coverage" id="news-coverage">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>নিউজ <span class="blue-shadow"> কাভারেজ </span></h2>

            <!-- Section paragraph -->
            <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>

            <!-- Student Success Slider Start -->
            <div class="news-slider owl-carousel owl-theme">
              <!-- Slider Item One -->
              <div class="item">
                <div class="row">
                  <div class="col-md-11">
                    <img src="{{asset('frontend/assets/images/details/Prothom-Alo.png')}}" class="newspaper-logo">
                    <div class="news-coverage-thumbnail">
                      <img src="img/prothom-alo-news.png" class="img-fluid">
                      <div class="news-coverage-thumbnail-hover">
                        <h2>নতুন ক্যাম্পাসে শিখবে সবাই</h2>
                        <a href="#" class="btn-news">বিস্তারিত পড়ুন</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slider Item Two -->
              <div class="item">
                <div class="row">
                  <div class="col-md-11">
                    <img src="{{asset('frontend/assets/images/details/jugantor.png')}}" class="newspaper-logo">
                    <div class="news-coverage-thumbnail">
                      <img src="img/jugantor-news.png" class="img-fluid">
                      <div class="news-coverage-thumbnail-hover">
                        <h2>৩ হাজারের বেশি শিক্ষার্থীকে...</h2>
                        <a href="#" class="btn-news">বিস্তারিত পড়ুন</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slider Item Three -->
              <div class="item">

                <div class="row">
                  <div class="col-md-11">
                    <img src="{{asset('frontend/assets/images/details/Prothom-Alo.png')}}" class="newspaper-logo">
                    <div class="news-coverage-thumbnail">
                      <img src="{{asset('frontend/assets/images/details/prothom-alo-news.png')}}" class="img-fluid">
                      <div class="news-coverage-thumbnail-hover">
                        <h2>নতুন ক্যাম্পাসে শিখবে সবাই</h2>
                        <a href="#" class="btn-news">বিস্তারিত পড়ুন</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- Student Success Slider End -->
          </div>
        </div>
      </div>
    </section>
    <!-- News Coverage Section End -->


    <!-- Landing Page Course Mentor Section Start -->
    <section class="ln-course-mentor" id="course-mentor">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>কোর্স <span class="blue-shadow"> মেন্টর </span></h2>

            <!-- Section paragraph -->
            <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>


            <div class="ln-course-mentor-info">
              <!-- Mentor Image -->
              <img src="{{asset('frontend/assets/images/details/mentor.png')}}" class="img-fluid">

              <!-- Course Mentor Content Start -->
              <div class="ln-course-mentor-content">
                <div class="row">
                  <div class="col-md-8">
                    <h2>সাদিয়া জামান ফারাহ</h2>
                    <h4>মেন্টর - ফুল স্ট্যাক ওয়েব ডেভেলপমেন্ট </h4>
                    <h4>প্রশিক্ষণ দিয়েছেন :  <span>২০০০ শিক্ষার্থী</span></h4>
                  </div>

                  <div class="col-md-4">
                    <div class="marketplace-badge">
                      <ul>
                        <li><img src="{{asset('frontend/assets/images/details/Level-2-Fiverr-Badge.jpg')}}"></li>
                        <li><img src="{{asset('frontend/assets/images/details/trs-badge.png')}}"></li>
                      </ul>
                    </div>
                  </div>
                </div>

                <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও।</p>

                <!-- Mentor Social Media Links Start -->
                <div class="mentor-social-media">
                  <ul>
                    <li>
                      <a href="">
                        <i class="fa fa-linkedin" data-toggle="tooltip" data-placement="bottom" title="Linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <i class="fa fa-instagram" data-toggle="tooltip" data-placement="bottom" title="Instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Mentor Social Media Links End -->
              </div>
              <!-- Course Mentor Content End -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Landing Page Course Mentor Section End -->


    <!-- How To Start Section Start -->
    <section class="ln-how-to-start" id="how-to-get-start">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>কিভাবে <span class="green-shadow"> শুরু করবেন? </span></h2>

            <!-- Section paragraph -->
            <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>

            <!-- Course Payment -->
            <div class="row mt-35">
              <div class="col-md-3 how-to-start-content">
                <img src="{{asset('frontend/assets/images/details/support.png')}}" class="img-fluid how-to-start-img">
              </div>
              <div class="col-md-9 how-to-start-content">
                <h2>আপনার পছন্দের কোর্সে পেমেন্ট করুন </h2>
                <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন</p>
              </div>
            </div>

            <!-- Class Link at Email -->
            <div class="row mt-35">
              <div class="col-md-3 how-to-start-content">
                <img src="{{asset('frontend/assets/images/details/support.png')}}" class="img-fluid how-to-start-img">
              </div>
              <div class="col-md-9 how-to-start-content">
                <h2>আপনার ইমেইলে ক্লাসের লিঙ্ক দেখুন</h2>
                <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন</p>
              </div>
            </div>

            <!-- Attend The Class -->
            <div class="row mt-35">
              <div class="col-md-3 how-to-start-content">
                <img src="{{asset('frontend/assets/images/details/support.png')}}" class="img-fluid how-to-start-img">
              </div>
              <div class="col-md-9 how-to-start-content">
                <h2>নির্দিষ্ট সময়ে ক্লাস করুন</h2>
                <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন</p>
              </div>
            </div>

            <!-- Computer Requirement Start -->
            <div class="computer-requirements">
              <h2>কম্পিউটারের নুন্যতম যোগ্যতা </h2>
              <p>মূলত যে কোন ডিভাইস যেমন ডেস্কটপ কম্পিউটার, ল্যাপটপ, মোবাইল কিংবা ট্যাব থেকেও আমাদের অনলাইন লাইভ ক্লাসে যোগ দিতে পারবেন। কিন্তু কাজ করার জন্য আপনার কম্পিউটার থাকা বাধ্যতামূলক। সর্বনিম্ন ৪ জিবি র‍্যাম এবং Core i3 প্রসেসর হলে কোর্সের কাজ গুলো করতে পারবেন। কিন্তু এর থেকে বেশী গতিসম্পন্ন কম্পিউটার হলে আপনার কাজ করতে সুবিধা হবে, কিন্তু বাধ্যতামূলক নয়।</p>
            </div>
            <!-- Computer Requirement End -->

          </div>
        </div>
      </div>
    </section>
    <!-- How To Start Section End -->


    <!-- Landing Page Contact Us Section Start -->
    <section class="ln-contact-us" id="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2><span class="blue-shadow"> যোগাযোগ করুন </span></h2>

            <!-- Section paragraph -->
            <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?</p>


            <!-- Contact Us Form Start -->
            <div class="row">
              <div class="col-md-8">
                <div class="ln-contact-us-form">
                  <!-- Form Start -->
                  <form action="" method="">

                    <div class="form-group">
                      <label class="sr-only" for="message">Name</label>
                      <div class="input-group">
                        <div class="input-group-addon-textarea">
                          <span>আপনার বার্তা লেখুন</span>
                        </div>
                      </div>
                      <textarea name="message" class="form-control" id="message" placeholder="Type something..." required="required" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="name">Name</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <span>আপনার নাম</span>
                        </div>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Required Field" required="required" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="address">Address</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <span>আপনার ঠিকানা</span>
                        </div>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Required Field" required="required" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="mobile">Mobile</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <span>মোবাইল নাম্বার</span>
                        </div>
                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Required Field" required="required" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="email">Email</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <span>আপনার ইমেইল</span>
                        </div>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Required Field" required="required" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="course">Course</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <span>আপনার ইমেইল</span>
                        </div>
                        <select name="course" class="form-control" id="course" placeholder="Required Field" required="required">
                          <option>Select an Option</option>
                          <option>PHP and Laravel</option>
                          <option>Full Stack Web Development</option>
                          <option>Responsive Web Design</option>
                          <option>Graphic Design</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <input type="submit" name="send" class="btn-send" value="পাঠিয়ে দিন">
                    </div>

                  </form>
                  <!-- Form End -->
                </div>
              </div>
            </div>
            <!-- Contact Us Form End -->
          </div>
        </div>
      </div>
    </section>
    <!-- Landing Page Contact Us Section End -->


    <!-- Footer Section Start -->
    <footer class="ln-footer" id="footer">
      <div class="container">
        <div class="row">
          <!-- Footer Page Nav Start -->
          <div class="col-md-10 col-sm-12 cl-12">
            <div class="ln-footer-nav">
              <ul>
                <li>
                  <a href="">আমাদের ক্যাম্পাস</a>
                </li>
                <li>
                  <a href="">কোর্স সমূহ</a>
                </li>
                <li>
                  <a href="">যোগাযোগ করুন</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Footer Page Nav End -->

          <!-- Footer Social Media Start -->
          <div class="col-md-2 col-sm-12 cl-12">
            <div class="ln-footer-social">
              <ul>
                <li>
                  <a href="" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a href="" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Footer Social Media End -->
        </div>
      </div>

      <!-- Back To Top Button Start -->
      <div class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
      </div>
      <!-- Back To Top Button End -->
    </footer>
    <!-- Footer Section End -->

    <!-- Mobile Footer Sticky Admission Button -->

      <a href="" data-toggle="modal" data-target="#admission">
        <div class="get-admission">
          ভর্তি হোন
        </div>
      </a>




    <!-- Admission Modal -->
    <div class="modal fade" id="admission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-logo text-center">
              <img src="{{asset('frontend/assets/images/details/logo.png')}}">
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="">

              <div class="form-group">
                <label class="modal-label">Full Name</label>
                <input type="text" name="name" class="form-control" required="required" autocomplete="off" placeholder="Required">
              </div>

              <div class="form-group">
                <label class="modal-label">Email Address</label>
                <input type="email" name="email" class="form-control" required="required" autocomplete="off" placeholder="Required">
              </div>

              <div class="form-group">
                <label class="modal-label">Contact No</label>
                <input type="text" name="phone" class="form-control" required="required" autocomplete="off" placeholder="Required">
              </div>

              <div class="form-group">
                <label class="modal-label">Gender</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">Female</label>
                </div>
              </div>

              <div class="form-group">
                <label class="modal-label">Address</label>
                <textarea class="form-control" name="address" required="required" placeholder="Required"></textarea>
              </div>

              <div class="form-group">
                <input type="submit" name="getAdmission" class="btn-send" value="Get Admission">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="{{asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <!-- Landing Page JS File -->
    <script src="{{asset('frontend/assets/js/main.js ')}}"></script>
  </body>
</html>
