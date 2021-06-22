@extends('layouts.main.app')

@section('styles')
  <link type="text/css" href="{{ asset('main/css/faqs.css') }}" rel="stylesheet" />
@endsection

@section('title', 'HostelPaddy - FAQS')

@section('content')
    <!--Frequently asked questions-->
    <div class="container-fluid">
      <div class="row faqs text-center">
        <div class="col-12">
          <h1>Frequently Asked Questions</h1>
          <br /><br />
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
          <select class="form-control option form-control-lg">
            <option>
              What happens to my listing after it has been rented and occupied
              by a student?
            </option>
          </select>
          <select class="form-control option form-control-lg">
            <option>
              How long does it take to get verified as an agent on Hostel paddy?
            </option>
          </select>
          <select class="form-control option form-control-lg">
            <option>Do I need to pay to list a hostel accomodation?</option>
          </select>
          <select class="form-control option form-control-lg">
            <option>
              Does Hostel Paddy offer referral services to it’s users?
            </option>
          </select>
          <select class="form-control option form-control-lg">
            <option>
              Can I pay a house owner/agent through the Hostel Paddy platform?
            </option>
          </select>
          <select class="form-control option form-control-lg">
            <option>
              What happens if I schedule a hostel tour and the agent doesn’t
              show up?
            </option>
          </select>
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
@endsection