@extends('layouts.main.app')
@section('title', 'HostelPaddy - Home')

@section('content')
    <!--Introduction Section-->
    <div class="container-fluid padding">
      <div class="row intro padding">
        <div class="col-lg-6 intro-text">
          <h1>Your No.1 Solution for hostel accommodation</h1>
          <p>
            An innovating way to relieve you of the hassle of hostel-hunting.
          </p>
          <br /><br />
          <a href="{{ route('onboarding') }}" class="btn btn-primary btn-lg">Get Started</a>
        </div>
        <div class="col-lg-6">
          <img src="{{ asset('main/home-img/screenshot.png') }}" class="img-fluid intro-img" alt="" />
        </div>
      </div>
    </div>
    <!-- Solution -->
    <div class="container  text-center solution padding">
      <div class="row padding">
        <div class="col-12">
          <h1 class="bold">A solution to a persistent problem</h1>
          <br /><br />
        </div>
        <div class="col-12">
          <p class="lead">
            Built by ex and current scholars for current scholars, Hostel paddy
            is a platform with the vision of connecting students with house
            owners/agents to solve their hostel accommodation problems
          </p>
          <br />
          <a href="{{ route('onboarding') }}" class="btn btn-primary btn-lg">Get Started</a>
        </div>
      </div>
    </div>
    <section class="info">
      <!--For Students-->
      <div class="container padding">
        <div class="row  students padding">
          <div class="col-lg-6">
            <img src="{{ asset('main/home-img/Rectangle 32.png') }}" class="img-fluid" />
          </div>
          <div class="col-md-12 col-lg-6">
            <h1>For Students</h1><br>
            <p>
              Students can view listed hostel accommodations according to their
              preference. Students security is of paramount interest to us, we
              ensure that all registered house owners/agents are vetted and
              verified agents.
              <br />
              We give you the flexibility to:
              <ul>
                <li>To set your accommodation preference</li><br>
                <li>Set your comfort and choose where you live</li><br>
                <li>Share their financial burden by with a hostel mate</li><br>
                <li>Stay updated with available hostel accommodation available around you</li>
              </ul>
            </p>
          </div>
        </div>
      </div>
      <!--House Owners-->
      <div class="container padding">
        <div class="row  house-owners padding">
          <div class="col-md-12 col-lg-6">
            <h1>For House owners/agents</h1><br>
            <p>
              House owners/agents can relax as we bring student clients to your
              doorstep on your terms, at almost no cost. You can also list as many
              available hostel accommodations as you wish.
              <br />
              We provide you with the possibility to:
              <ul>
                <li>List accommodation and set your price.</li><br>
                <li>Set the terms for your listed hostel accommodation</li><br>
                <li>Give visibility to your available hostel accommodation nationwide.</li><br>
                <li>Manage your listed hostel accommodation.</li><br>
              </ul>
              <br />
              <a href="#" class="btn btn-primary learn-more-btn btn-lg">Learn More</a>
            </p>
          </div>
          <div class="col-lg-6">
            <img src="{{ asset('main/home-img/Rectangle 32 (1).png') }}" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <!--Exclusive Features-->
    <div class="container features padding">
      <div class="row padding">
        <div class="col-12 text-center">
          <h2>Exclusive Features</h2><br><br>
        </div>
        <div class="col-md-12 col-lg-6">
          <img src="{{ asset('main/home-img/Vector.png') }}" alt=""><br><br>
          <h1>Keep track of your dream hostel apartment</h1>
          <p>With your notification on, you will be the first to know when your desired
            hostel accommodation is listed.
          </p>
        </div>
        <div class="col-md-12 col-lg-6">
          <img src="{{ asset('main/home-img/Vector2.png') }}" alt=""><br><br>
          <h1>Request for a hostel mate</h1>
          <p>As a student, you can request for a hostel mate to split your rent and relieve your financial burden.
          </p>
        </div>
      </div>
    </div>

    <!-- <div class="container-fluid jumbotron-billboard padding customers"> -->
    <!-- <img class="img-fluid" src="home-img/Rectangle 149.png" alt=""> -->
    <!-- <img class="img-fluid" src="home-img/Rectangle 148.png" alt=""> -->
    <!-- </div> -->

    <div class="container padding">
      <div class="row subscribe padding">
        <div class="col-md-12 col-lg-6 mb-3">
          <h1>Stay updated and never miss out on the important news we have to share with you</h1>
        </div>
        <div class="col-md-12 col-lg-6">
          <h2>Subscribe to our News Blog</h2>
          <form
            action="https://hostelpaddy.us1.list-manage.com/subscribe/post?u=db75ffe66d373e71ededb3196&amp;id=7fb6ed9b1f"
            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="sign-up validate"
            target="_blank" novalidate>
            <div class="form-group">
              <input type="email" name="EMAIL" class="form-control p-3 w-100" placeholder="Enter email" />
            </div>
            <div class="form group">
              <button type="submit" class="btn btn-primary btn-lg">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
