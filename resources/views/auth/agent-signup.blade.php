@extends('layouts.main.onboard')
@section('title', 'HostelPaddy - Agent Sign Up')

@section('content')
  @include('layouts.main.signupnav')

  <!-- Onboarding content -->

  <form action="{{ route('agent.register') }}" class="form" method="POST">
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
          <input id="name" type="text" class="input" name="name" placeholder="Full name" required aria-required="true">

          <input id="email" type="email" class="input" name="email" placeholder="Email" required aria-required="true">

          <input id="num" type="tel" class="input" name="number" placeholder="Phone Number" required aria-required="true">

          <!-- Please add ".disabled-state" after you must have sorted the script.js file out -->
          <div class="continue-onboarding button-style enabled-state animated" id="continueOnboardingHouseOwner">Continue
          </div>

        </div>
        <!-- /first part of signing up -->

        <!-- second part of signing up -->
        <div class="secondPart animated displayNone" id="secondPart">
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
          <div class="continue-onboarding button-style enabled-state animated" id="continueOnboardingOne">
            Continue
          </div>
        </div>

        <!-- /second part of signing up -->

        <!-- third part of signing up -->
        <div class="thirdPart animated displayNone" id="thirdPart">
          <select id="userState" name="state" class="select input" type="select" value="Abia" required>
            <option value="Abia">Abia</option>
            <option value="Adamawa">Adamawa</option>
            <option value="Anambra">Anambra</option>
            <option value="Enugu">Enugu</option>
            <option value="Imo">Imo</option>
          </select>

          <!-- Please add ".disabled-state" after you must have sorted the script.js file out -->
          <div class="continue-onboarding button-style enabled-state animated" id="continueOnboarding">Continue
          </div>
        </div>
        <!-- /third part of signing up -->

        <!-- fourth part of signing up -->
        <div class="fourthPart animated displayNone" id="fourthPart">
          <select id="userState" name="state" class="select input" type="select" value="Abia" required>
            <option value="Abia">Abia</option>
            <option value="Adamawa">Adamawa</option>
            <option value="Anambra">Anambra</option>
            <option value="Enugu">Enugu</option>
            <option value="Imo">Imo</option>
          </select>

          <!-- Please add ".disabled-state" after you must have sorted the script.js file out -->
          <div class="continue-onboarding button-style enabled-state animated" id="continueOnboarding">Continue
          </div>
        </div>
        <!-- /fourth part of signing up -->
      </div>

      <div class="consent text-left mt-3" id="consentContainer">
        By signing up, you have agreed to Hostel Paddy's <a href="{{ route('tos') }}" class="signup-link">Terms
          of
          service</a> and <a href="{{ route('privacy') }}" class="signup-link">Privacy policy</a>
      </div>

      <button type="submit" class="mt-3 button-primary displayNone button-style" id="submitBtnHouseOwner">Finish</button>
      <!-- /Onboarding content -->

    </div>
  </form>

@endsection
