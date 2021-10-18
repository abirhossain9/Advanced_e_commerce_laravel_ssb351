@extends('frontend.layout.template')
@section('body')
<section id="home" class="pd-tp-80">
<div class="container">
    <div class="row">
        {{Auth::user()->name}}
    </div>
</div>
</section>
@endsection
