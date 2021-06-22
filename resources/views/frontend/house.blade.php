@extends('layouts.main.app')

@section('styles')
  <link type="text/css" href="{{ asset('main/css/house.css') }}" rel="stylesheet" />
@endsection

@section('title', 'HostelPaddy - House')

@section('content')
    <!--Showcase your hostel-->
    <div class="container-fluid padding">
        <div class="row showcase jumbotron padding">
          <div class="col-lg-6 col-md-6">
            <h1>Showcase your hostel to a wider audience</h1>
            <p>
              Eleifend pharetra eu, dolor nunc nulla. Urna, tellus vulputate
              ipsum, purus, semper dictum augue vitae. Platea fermentum nisl
              tristique non lectus tristique. Sed senectus nisl sit lectus tempor
              gravida.
            </p>
            <br />
            <a href="{{ route('onboarding') }}" class="btn btn-primary btn-lg">Get Started</a>
          </div>
          <div class="col-lg-6 col-md-6">
            <img class="img-fluid" src="{{ asset('main/house-img/pexels-timur-saglambilek-87223 1.png') }}" alt="" />
          </div>
        </div>
      </div>
      <!--House owner-->
      <div class="container-fluid padding">
        <div class="row owner-agent jumbotron padding">
          <div class="col-lg-6 col-md-6">
            <img class="img-fluid" src="{{ asset('main/house-img/agents 2.png') }}" alt="" />
          </div>
          <div class="col-lg-6 col-md-6">
            <h2>Are you a house owner or Agent?</h2>
            <br />
            <p>
              Do you have your buildings located around higher institutions in
              Nigeria and you're looking to reach a wide audience of students?
            </p>
            <p>
              Hostel Paddy is an online platform that bridges the gap between you
              and your prospective tenants (students in this case)"
            </p>
          </div>
        </div>
      </div>

      <div class="container-fluid padding">
        <div class="row works text-center padding">
          <div class="col-12">
            <h1>How it works</h1>
          </div>
          <div class="col-md-3 col-sm-6">
            <i class="fas fa-registered"></i>
            <span>
              <h3>Register</h3>
            </span>
          </div>
          <div class="col-md-3 col-sm-6">
            <i class="fas fa-home"></i>
            <span>
              <h3>List Hostel</h3>
            </span>
          </div>
          <div class="col-md-3 col-sm-6">
            <i class="fas fa-dollar-sign"></i>
            <span>
              <h3>Payment</h3>
            </span>
          </div>
          <div class="col-md-3 col-sm-6">
            <i class="fas fa-check-circle"></i>
            <span>
              <h3>Finish</h3>
            </span>
          </div>
          <div class="col-12 works-btn">
            <a href="{{ route('onboarding') }}" class="btn btn-primary btn-lg">Get Started</a>
          </div>
        </div>
      </div>

      <div class="container-fluid padding">
        <div class="row benefits text-center padding">
          <div class="col-12">
            <h1>Benefits</h1>
            <br />
            <p>
              Aliquam odio non amet, praesent pellentesque vel. Arcu ac orci nec
              leo, facilisis quis eu. Netus praesent augue lorem.
            </p>
          </div>
        </div>
      </div>

      <div class="container-fluid padding">
        <div class="row audience jumbotron padding">
          <div class="col-lg-6 col-md-6">
            <h4 class="red-caption">Audience</h4>
            <br />
            <h2 class="aud-rent-pay">Get direct access to a wider audience.</h2>
            <br />
            <p>
              Have your hostels, apartments showcased to a large variety of
              Audience with reduced risk of getting scammed by untrustworthy
              Agents
            </p>
            <br />
            <p>
              Condimentum montes, sit hendrerit nam. Orci velit sed at massa
              auctor purus diam etiam. Mattis amet vel condimentum neque arcu,
              nunc ac mauris. In morbi lorem egestas commodo.
            </p>
          </div>
          <div class="col-lg-6 col-md-6">
            <img class="img-fluid" src="{{ asset('main/house-img/agents 3.png') }}" alt="" />
          </div>
        </div>
      </div>

      <div class="container-fluid padding">
        <div class="row rent jumbotron padding">
          <div class="col-md-6 col-lg-6">
            <img class="img-fluid" src="{{ asset('main/house-img/agents 2.png') }}" alt="" />
          </div>
          <div class="col-md-6 col-lg-6">
            <h4 class="red-caption">Rent</h4>
            <br />
            <h2 class="aud-rent-pay">Quick & Faster Rental</h2>
            <br />
            <p>
              Guarantee of getting students for your hostels, apartments faster.
              Hostel Paddy operates on a national scale and students refer to
              search engines when researching an area for accomodation. That
              means, quick
            </p>
            <p>
              Condimentum montes, sit hendrerit nam. Orci velit sed at massa
              auctor purus diam etiam. Mattis amet vel condimentum neque arcu,
              nunc ac mauris. In morbi lorem egestas commodo.
            </p>
          </div>
        </div>
      </div>

      <div class="container-fluid padding">
        <div class="row payment jumbotron padding">
          <div class="col-md-6 col-lg-6">
            <h4 class="red-caption">Payment</h4>
            <br />
            <h2 class="aud-rent-pay">Prompt Payment</h2>
            <br />
            <p>
              Get your accommodation fees paid on time or within paying time range
              without having to run after the students.
            </p>
            <p>
              Condimentum montes, sit hendrerit nam. Orci velit sed at massa
              auctor purus diam etiam. Mattis amet vel condimentum neque arcu,
              nunc ac mauris. In morbi lorem egestas commodo.
            </p>
          </div>
          <div class="col-md-6 col-lg-6">
            <img class="img-fluid" src="{{ asset('main/house-img/agents 1.png') }}" alt="" />
          </div>
        </div>
      </div>

      <div class="carousel-container">
        <div class="row customers">
          <div class="col-12 text-center padding">
            <h1>What our customers say about us</h1>
          </div>
          <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="single-box">
                        <div class="img-area">
                          <img class="img-fluid" src="{{ asset('main/house-img/Rectangle 147 (1).png ') }}" alt="" />
                        </div>
                        <div class="img-text">
                          <h2>Wilson Herwitz</h2>
                          <h4>Landlord</h4>
                          <p>
                            <q>Definitely Recommending Hostel Paddy</q><br />
                            Hostel paddy has helped me solve an issue that got me
                            worrried the first time i received the nes of my
                            admission
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="single-box">
                        <div class="img-area">
                          <img class="img-fluid" src="{{ asset('main/house-img/Rectangle 148 (1).png ') }}" alt="" />
                        </div>
                        <div class="img-text">
                          <h2>Person Two</h2>
                          <h4>Landlord</h4>
                          <p>
                            <q>Definitely Recommending Hostel Paddy</q><br />
                            Hostel paddy has helped me solve an issue that got me
                            worrried the first time i received the nes of my
                            admission
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="single-box">
                        <div class="img-area">
                          <img class="img-fluid" src="{{ asset('main/house-img/Rectangle 149 (1).png ') }}" alt="" />
                        </div>
                        <div class="img-text">
                          <h2>Person three</h2>
                          <h4>Landlord</h4>
                          <p>
                            <q>Definitely Recommending Hostel Paddy</q><br />
                            Hostel paddy has helped me solve an issue that got me
                            worrried the first time i received the nes of my
                            admission
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="single-box">
                        <div class="img-area">
                          <img class="img-fluid" src="{{ asset('main/house-img/Rectangle 147 (1).png ') }}" alt="" />
                        </div>
                        <div class="img-text">
                          <h2>Person Four</h2>
                          <h4>Landlord</h4>
                          <p>
                            <q>Definitely Recommending Hostel Paddy</q><br />
                            Hostel paddy has helped me solve an issue that got me
                            worrried the first time i received the nes of my
                            admission
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="single-box">
                        <div class="img-area">
                          <img class="img-fluid" src="{{ asset('main/house-img/Rectangle 148 (1).png ') }}" alt="" />
                        </div>
                        <div class="img-text">
                          <h2>Person Five</h2>
                          <h4>Landlord</h4>
                          <p>
                            <q>Definitely Recommending Hostel Paddy</q><br />
                            Hostel paddy has helped me solve an issue that got me
                            worrried the first time i received the nes of my
                            admission
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="single-box">
                        <div class="img-area">
                          <img class="img-fluid" src="{{ asset('main/house-img/Rectangle 149 (1).png ') }}" alt="" />
                        </div>
                        <div class="img-text">
                          <h2>Person Six</h2>
                          <h4>Student</h4>
                          <p>
                            <q>Definitely Recommending Hostel Paddy</q><br />
                            Hostel paddy has helped me solve an issue that got me
                            worrried the first time i received the nes of my
                            admission
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection