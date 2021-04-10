@extends('layouts.main.onb')
@section('title', 'HostelPaddy - Onboarding')

@section('content')
  <!-- Nav container -->
  <div class="container-fluid mx-0">
    <div class="row">

      <!-- image visible only in large screens -->
      <div class="col-lg-4 side-image">
        <div class="heading-title">
          <h1>Your No. 1 solution for hostel accommodation</h1>
        </div>
        <div class="desc-text mt-3">
          <p>An innovating way to relieve you of the hassle of hostel-hunting</p>
        </div>
      </div>
      <!-- /image visible only in large screens -->


      <div class="col-12 col-md-12 col-lg-8">

        <!-- nav-container -->
        <div class="nav-container">
          <a href="{{ route('home') }}" class="logo-link">
            <div class="logo">
              <img src="{{ asset('main/img/logo.svg') }}" alt="Logo" class="logo img-fluid">
            </div>
          </a>
          <div class="login-button">
            <a href="{{ route('student.login') }}" class="login-button-text">Login</a>
          </div>
        </div>
        <!-- /nav-container -->

        <!-- Onboarding content -->
        <div class="onboard-container">
          <div class="onboard-title">
            Select an account type
          </div>

          <!-- Student onboard -->
          <a href="{{ route('student.register') }}" class="onboard-student">
            <div class="onboard onboard-student">
              <div class="icon">
                <!-- <i class="lnr lnr-graduation-hat"></i> -->
                <i class="fa fa-graduation-cap"></i>
              </div>
              <div class="onboard-text">
                <div class="onboard-text-title">
                  Sign up as a Student
                </div>
                <div class="onboard-text-desc">
                  Get a personalised experience. Save, filter and easily search for a hostel
                </div>
              </div>
            </div>
          </a>
          <!-- /Student onboard -->

        </div>
        <!-- /Onboarding content -->
      </div>
    </div>
  </div>
  <!-- /Nav container -->
@endsection
