@extends('layouts.onboarding.app')
@section('title', 'HostelPaddy - Agent Sign Up')

@section('content')
  @include('layouts.onboarding.signup_nav')

  <!-- Onboarding content -->

  <form action="{{ route('agent.register') }}" class="form" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="onboard-container">
      <div class="sign-up-onboard-text">

        <div class="icon mr-2" id="iconContainer">
          <i class="fa fa-2x fa-hotel icon-icon"></i>
        </div>
        <div id="onboardTitle" class="onboard-title ml-2">
          Sign up as a house owner/agent
        </div>
      </div>
      <div class="sub-title" id="subTitle"></div>

      @if ($errors->any())
        <ul>
          @foreach ($errors->all() as $errors)
            <li class="text-danger">{{ $errors }}</li>
          @endforeach
        </ul>
      @endif

      <div class="form-control sign-up">

        <!-- first part of signing up -->
        <div class="firstPart animated" id="firstPart">
          <input id="name" type="text" class="input" name="name" placeholder="Full name" value="{{ old('name') }}"
                 required aria-required="true">

          <input id="email" type="email" class="input" name="email" placeholder="Email" value="{{ old('email') }}"
                 required aria-required="true">

          <input id="phone" type="tel" class="input" name="phone" placeholder="Phone Number" value="{{ old('phone') }}"
                 required aria-required="true">

          <!-- Please add ".disabled-state" after you must have sorted the script.js file out -->
          <div class="continue-onboarding button-style enabled-state animated" id="continueOnboardingHouseOwner">
            Continue
          </div>

        </div>
        <!-- /first part of signing up -->

        <!-- second part of signing up -->
      {{-- <div class="secondPart animated displayNone" id="secondPart">
        <div class="container">
          <div class="row">
            <div class="col-3">
              <input id="ver1" maxlength="1" minlength="1" type="num" class="input" name="ver1" required
                aria-required="true">
            </div>

            <div class="col-3">
              <input id="ver2" maxlength="1" minlength="1" type="num" class="input" name="ver2" required
                aria-required="true">
            </div>

            <div class="col-3">
              <input id="ver3" maxlength="1" minlength="1" type="num" class="input" name="ver3" required
                aria-required="true">
            </div>

            <div class="col-3">
              <input id="ver4" maxlength="1" minlength="1" type="num" class="input" name="ver4" required
                aria-required="true">
            </div>

          </div>
          <div class="row">
            <div class="link-text text-left mt-3" id="linktextContainer">
              Didn't receive a code? <a href="" class="link">Resend</a>
              <br /> <a href="#" id="changeNum" class="link">Change number</a>

            </div>
          </div>
        </div>

        <!-- Please add ".disabled-state" after you must have sorted the script.js file out -->
        <div class="continue-onboarding button-style enabled-state animated" id="continueAfterNumber">
          Continue
        </div>
      </div> --}}

      <!-- /second part of signing up -->

        <!-- third part of signing up -->
        <div class="thirdPart animated displayNone" id="thirdPart">
          <input id="pwd" type="password" class="input" name="password" placeholder="Password" required
                 aria-required="true">
          <span class="hidePass" id="hidePass" onclick="togglePass()">Show</span>

          <input id="confirmPwd" type="password" class="input d-block remove-mt" name="password_confirmation"
                 placeholder="Confirm password" required aria-required="true">

          <!-- Please add ".disabled-state" after you must have sorted the script.js file out -->
          <div class="continue-onboarding button-style enabled-state animated" id="continueOnboardingAfterPass">
            Continue
          </div>
        </div>
        <!-- /third part of signing up -->

        <!-- fourth part of signing up -->
        <div class="fourthPart animated displayNone" id="fourthPart">

          <div class="container">
            <div class="row">
              <div class="col-12 dropzone">
                <input id="image" type="file" class="customFileUpload" name="image" required aria-required="true">
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="link-text text-left mt-4" id="linktextContainer">
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" class="custom-control-input" id="skip">
                      <label class="custom-control-label" for="skip">Skip and
                        do this later</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="d-block mt-5">
                <button type="submit" class="mt-3 button-primary displayNone button-style"
                        id="submitBtnHouseOwner">Finish
                </button>
              </div>
            </div>
          </div>

        </div>
        <!-- /fourth part of signing up -->
      </div>

      <div class="consent text-left mt-3" id="consentContainer">
        By signing up, you have agreed to Hostel Paddy's <a href="{{ route('tos') }}" class="signup-link">Terms
          of
          service</a> and <a href="{{ route('privacy') }}" class="signup-link">Privacy policy</a>
      </div>
    </div>
  </form>

@endsection

@section('script')
  <script src="{{ asset('main/js/agent/script.js') }}"></script>
  <script>
    let toggle = document.getElementById('skip');
    let image = document.getElementById('image');

    toggle.addEventListener("click", function () {
      image.toggleAttribute('required');
    })
  </script>
@endsection
