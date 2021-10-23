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
            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">S</div>
            <div class="tab-pane fade" id="nav-course" role="tabpanel" aria-labelledby="nav-course-tab">..</div>
            <div class="tab-pane fade" id="nav-notice" role="tabpanel" aria-labelledby="nav-notice-tab">...</div>
          </div>
       </div>
    </div>
</div>
</section>
@endsection
