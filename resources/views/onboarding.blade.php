@extends('layouts.main.onboard')
@section('title', 'HostelPaddy - Onboarding')

@section('content')
  @include('layouts.main.onboardnav')

  <!-- Onboarding content -->
  <div class="onboard-container">
    <div class="onboard-title">
      Select an account type
    </div>

    <!-- Student onboard -->
    <a href="{{ route('student.register') }}" class="onboard-link">
      <div class="onboard onboard-student">
        <div class="icon">
          <i class="fa fa-2x fa-graduation-cap icon-icon"></i>
        </div>
        <div class="onboard-text text-left">
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

    <!-- House-owner onboard -->
    <a href="{{ route('agent.register') }}" class="onboard-link">
      <div class="onboard onboard-house-owner">
        <div class="icon">
          <i class="fa fa-2x fa-hotel icon-icon"></i>
        </div>
        <div class="onboard-text text-left">
          <div class="onboard-text-title">
            Sign up as a house owner/agent
          </div>
          <div class="onboard-text-desc">
            List hostels and manage hostel listings
          </div>
        </div>
      </div>
    </a>
    <!-- /House-owner onboard -->

  </div>
  <!-- /Onboarding content -->
@endsection