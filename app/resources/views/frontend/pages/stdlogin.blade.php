@extends('frontend.layout.template')
@section('body')
<section id="home" class="pd-tp-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                <!-- Email Address -->
                <div class="form-group">
                  <x-label for="email" :value="__('Email')" />
                  <x-input id="email" class="form-control" type="email" placeholder="Enter Your Email" name="email" :value="old('email')" required autofocus />
              </div>

                <!-- Password -->
                <div class="form-group">
                  <x-label for="password" :value="__('Password')" />
                  <x-input id="password" class="form-control" type="password" placeholder="Enter Your Password"  name="password" required autocomplete="current-password" />
                </div>
                <button type="submit" class="btn btn-info btn-block">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
