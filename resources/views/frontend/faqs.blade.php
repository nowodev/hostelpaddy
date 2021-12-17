@extends('layouts.main.app')

@section('styles')
  <link type="text/css" href="{{ asset('main/css/faqs.css') }}" rel="stylesheet"/>
@endsection

@section('title', 'HostelPaddy - FAQS')

@section('content')
  <!--Frequently asked questions-->
  <div class="container-fluid">
    <div class="row faqs text-center">
      <div class="col-12">
        <h1>Frequently Asked Questions</h1>
        <br/><br/>
      </div>
      <div class="form-group text-center col-12 has-search">
          <span class="form-control-feedback"
          ><i class="fas fa-search"></i
            ></span>
        <input
          type="text"
          class="form-control"
          placeholder="Type your question here"
        />
      </div>
    </div>
  </div>

  <!--Questions-->
  <div class="container-fluid">
    <div class="row questions text-center">
      <div class="col=12">
        <h1>
          We know you have questions to ask and we have got them answered
          already
        </h1>

        <div id="accordion">
          <div class="card option">
            <div class="card-header">
              <a class="card-link stretched-link" data-toggle="collapse" href="#collapseOne">
                What happens to my listing after it has been rented and occupied by a student?
              </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
              </div>
            </div>
          </div>
          <div class="card option">
            <div class="card-header">
              <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseTwo">
                How long does it take to get verified as an agent on Hostel paddy?
              </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
              </div>
            </div>
          </div>
          <div class="card option">
            <div class="card-header">
              <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseThree">
                Do I need to pay to list a hostel accomodation?
              </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
              </div>
            </div>
          </div>
          <div class="card option">
            <div class="card-header">
              <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseFour">
                Does Hostel Paddy offer referral services to it’s users?
              </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
              </div>
            </div>
          </div>
          <div class="card option">
            <div class="card-header">
              <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseFive">
                Can I pay a house owner/agent through the Hostel Paddy platform?
              </a>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
              </div>
            </div>
          </div>
          <div class="card option">
            <div class="card-header">
              <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseSix">
                What happens if I schedule a hostel tour and the agent doesn’t show up?
              </a>
            </div>
            <div id="collapseSix" class="collapse" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Still have questions-->
      <div class="container-fluid">
        <div class="row any-questions text-center">
          <div class="col-12">
            <h2>Do you still have any question you would like to ask?</h2>
            <p>
              If we were unable to answer the question you have from any of
              our answers above, kindly <a href="contact.html">contact us</a> and we will be glad to
              answer them
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
