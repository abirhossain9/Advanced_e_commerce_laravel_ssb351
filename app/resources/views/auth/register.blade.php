@extends('layouts.adminlayouts')

@section('body')
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
          <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
          <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter your username">
          </div><!-- form-group -->
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter your password">
          </div><!-- form-group -->
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter your fullname">
          </div><!-- form-group -->

          <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
          <button type="submit" class="btn btn-info btn-block">Sign Up</button>

          <div class="mg-t-40 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>
        </div><!-- login-wrapper -->
      </div><!-- d-flex -->
      @endsection
