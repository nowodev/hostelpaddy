@extends('layouts.main.app')
{{-- @section('styles')
  <link type="text/css" href="{{ asset('main/css/styles.css') }}" rel="stylesheet" />
  <link type="text/css" href="{{ asset('main/css/about.css') }}" rel="stylesheet" />
@endsection --}}
@section('title', 'HostelPaddy - About')

@section('content')
<div class="container-fluid padding">
    <div class="row about-us text-center padding">
      <div class="col-12">
        <h1>About Us</h1>
        <br /><br />
      </div>
      <p class="lead">
        Students first Online Platform that allows students search for
        apartments within their budget and location with relative ease.
      </p>
    </div>
  </div>
  <!---Our Story-->
  <div class="container-fluid padding">
    <div class="row jumbotron our-story padding">
      <div class="col-lg-6 col-md-6">
        <img class="img-fluid" src="{{ asset('main/about-img/About us 1.png') }}" alt="" />
      </div>
      <div class="col-lg-6 col-md-6">
        <h1 class="story-caption">
          Our <b class="story">Story</b>
        </h1>
        <br />
        <p class="lead">
          Hostel paddy is a start-up created by a team of like-minded
          individuals that have experienced the pain and struggle of getting
          accommodation. We have crafted a solution but targeted at students
          in tertiary institutions across the country.
        </p>
        <br />
        <p class="lead">
          We offer students a solution to get rid of inaccessibility, hassle
          and bureaucracies, with a platform that is easy, fast and safe, for
          total peace of mind, offering unique places for every budget, just
          for a month or forever, just a click away.
        </p>
        <br />
        <p class="lead">
          Built to solve hostel accommodation deficit and complications for
          students in Nigerian tertiary institutions, we bring a marketplace
          for students and house owners to be accessible to each other. With
          over one hundred and fifty private and public tertiary institutions
          in the country and a sizable carrying capacity of over six hundred
          thousand students, it is obvious that a solution is needed.
        </p>
      </div>
    </div>
  </div>
  <!--Our Mission-->
  <div class="container-fluid padding">
    <div class="row text-center our-mission padding">
      <div class="col-12">
        <hr />
        <h1>Our <b class="mission">Mission</b></h1>
        <br />
        <p>To enable Students get the best apartments within their budget</p>
      </div>
      <!--Banner-->
      <img class="img-fluid banner" src="{{ asset('main/about-img/About us 2.png') }}" alt="" />
    </div>
  </div>

  <!--Our Values-->
  <div class="container-fluid padding">
    <div class="row our-values jumbotron padding">
      <div class="col-12 text-center">
        <h1>Our <b class="values">Values</b></h1>
      </div>
      <div class="col-md-4 values-txt">
        <h1>Selfless</h1>
        <p>
          HostelPaddy commits to acting in the best interests of their clients
          at all times.
        </p>
      </div>
      <div class="col-md-4 values-txt">
        <h1>Transparency</h1>
        <p>
          We work to ensure a transparent relationship between our agents and
          clients.
        </p>
      </div>
      <div class="col-md-4 values-txt">
        <h1>Trustworthy</h1>
        <p>
          We are forthcoming with the good or bad news in relation to our
          services .
        </p>
      </div>
    </div>
  </div>
@endsection