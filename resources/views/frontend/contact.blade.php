@extends('layouts.main.app')

@section('styles')
  <link type="text/css" href="{{ asset('main/css/contact.css') }}" rel="stylesheet" />
@endsection

@section('title', 'HostelPaddy - Contact Us')

@section('content')
  <div class="container-fluid text-center stay-connected">
    <h1>Stay Connected With Us</h1>
  </div>
  <!--Enquires-->
  <div class="container-fluid">
    <div class="row enquires">
      <div class="col-lg-6 col-md-6">
        <img src="{{ asset('main/contact-img/vpMw_IYoAu0 (1).png') }}" class="img-fluid" alt="" />
      </div>
      <div class="col-md-6 col-lg-6">
        <p class="mt-sm-3">Send us your enquiries and we will get back to you</p>
        <form class="enquires-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Name" />
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Enter Email" />
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="10" placeholder="Enter Message"></textarea>
          </div>
          <button type="button" class="btn btn-primary btn-lg">
            Send Message
          </button>
        </form>
      </div>
    </div>
  </div>
  <!--Email and Socials-->
  <div class="container-fluid">
    <div class="row connect">
      <div class="col-12">
        <h3>Email <a href="#">hostelpaddy@gmail.com</a></h3>
        <h3>
          Socials
          <a href="">
            <img src="{{ asset('main/img/instagram.png') }}" class="img-fluid mr-3" alt="" />
          </a>
          <a href="">
            <img src="{{ asset('main/img/twitter.png') }}" class="img-fluid mr-3" alt="" />
          </a>
          <a href="">
            <img src="{{ asset('main/img/facebook.png') }}" class="img-fluid mr-3" alt="" />
          </a>
        </h3>
      </div>
    </div>
  </div>
@endsection
