@extends('layouts.onboarding.app')
@section('title', 'HostelPaddy - Sign In')

@section('content')
  @include('layouts.onboarding.signin_nav')

  <!-- Onboarding content -->

  <form action="{{ route('onboard.login') }}" class="form" method="POST">
    @csrf
    <div class="onboard-container">
      <div class="sign-up-onboard-text">

        <div class="onboard-title ml-2">
          Log in to your account
        </div>
      </div>

      @if ($errors->any())
        <x-main.errors />
      @endif

      <div class="form-control login">

        <!-- first part of signing up -->
        <input id="email" type="email" class="input" name="email" placeholder="Email" required aria-required="true" value="{{ old('email') }}">
        <a href="forgotpass.html" class="forgot-pass-link text-right float-right mb-3">Forgot Password?</a>
        <input id="pwd" type="password" class="input" name="password" id="pwd" placeholder="Password" required
          aria-required="true">
        <span class="hidePass" id="hidePass" onclick="togglePass()">Show</span>
      </div>
      <!-- /first part of signing up -->
      <button type="submit" class="mt-3 button-primary button-style" id="submitBtn">Log in</button>
      <!-- /Onboarding content -->


    </div>
  </form>

@endsection
