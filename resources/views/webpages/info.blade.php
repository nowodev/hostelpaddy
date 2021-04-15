@extends('layouts.main.app')
@section('title', 'HostelPaddy - Hostel Info')

@section('content')
  <div class="container gallery">
    <div class="card mx-2 p-2 border-0 border-bottom">
      <div class="card-image-top">
        <div id="carousel1" class="carousel slide position-relative d-md-none" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('main/img/hostel.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('main/img/hostel.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('main/img/hostel.png') }}" alt="Third slide">
            </div>
          </div>
          <div class="position-absolute identifier">
            <h3 class="h3">1/5</h3>
          </div>
        </div>
        <div class="d-none d-md-flex">
          <div class="one" width="">
            <img class="main w-100 img-fluid" src="{{ asset('main/img/hostel.png') }}" alt="First slide">
          </div>
          <div class="two mx-auto">
            <div class="side">
              <img class="" src="{{ asset('main/img/Rectangle 157.png') }}" alt="First slide">
            </div>
            <div class="side">
              <img class="" src="{{ asset('main/img/Rectangle 159.png') }}" alt="First slide">
            </div>
            <div class="side">
              <img class="" src="{{ asset('main/img/Rectangle 160.png') }}" alt="First slide">
            </div>
            <div class="">
              <img class="" src="{{ asset('main/img/Rectangle 161.png') }}" alt="First slide">
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-3">
        <div class="col-10">
          <p class="card-text text-primary text-bold">Surulere, Lagos</p>
          <h5 class="card-title text-dark h5 mt-2 head">The chronicles hostel lodge</h5>
          <p class="card-subtitle lead">1 room duplex house accomodation</p>
        </div>
        <div class="col-2 pt-3">
          <a href="#"><img src="{{ asset('main/img/Share button.png') }}" alt="" class="img-fluid share"></a>
        </div>
        <div class="col-12 my-2">
          <hr class="" />
        </div>
        <div class="col-12">
          <div class="d-flex flex-wrap">
            <div class="px-2">
              <li class="rooms">Bedroom</li>
            </div>
            <div class="px-2">
              <li class="rooms">Kitchen</li>
            </div>
            <div class="px-2">
              <li class="rooms">Dinning</li>
            </div>
            <div class="px-2">
              <li class="rooms">Bathroom</li>
            </div>
            <div class="px-2">
              <li class="rooms">Wardrobe</li>
            </div>
            <div class="px-2">
              <li class="rooms">Living area</li>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- house rules -->
  <div class="container mt-5">
    <h2 class="h5"><b>House Rules</b></h2>
    <p class="mb-3">These are the set of things that the House owner doesn't tolerate in the house except otherwise
    </p>
    <ol>
      <li class="mb-3">
        <div class="d-flex">
          <img src="{{ asset('main/img/wrong.png') }}" alt="" class="img-fluid">
          <p class="pt"> &nbsp;&nbsp;&nbsp;Smoking</p>
        </div>
      </li>
      <li class="mb-3">
        <div class="d-flex">
          <img src="{{ asset('main/img/wrong.png') }}" alt="" class="img-fluid">
          <p class=" "> &nbsp;&nbsp;&nbsp;Pets</p>
        </div>
      </li>
      <li class="mb-3">
        <div class="d-flex">
          <img src="{{ asset('main/img/wrong.png') }}" alt="" class="img-fluid">
          <p class=" "> &nbsp;&nbsp;&nbsp;Events</p>
        </div>
      </li>
      <li class="mb-3">
        <div class="d-flex">
          <img src="{{ asset('main/img/wrong.png') }}" alt="" class="img-fluid">
          <p class=" "> &nbsp;&nbsp;&nbsp;Overnight guests</p>
        </div>
      </li>
      <li class="mb-3">
        <div class="d-flex">
          <img src="{{ asset('main/img/wrong.png') }}" alt="" class="img-fluid">
          <p class=" "> &nbsp;&nbsp;&nbsp;Children</p>
        </div>
      </li>
    </ol>
  </div>

  <!-- prefered tenants -->
  <div class="container mt-5">
    <h2 class="h5"><b>Prefered Tenants</b></h2>
    <p class="">Male or female, student who is responsible and doesn't make trouble with the neighbours.</p>
  </div>

  <!-- Utilities -->
  <div class="container mt-5">
    <h2 class="h5 mb-3"><b>Utilities</b></h2>
    <ul class="">
      <li class="mb-3 utility">Electricity</li>
      <li class="mb-3 utility">Water</li>
      <li class="mb-3 utility">Wifi</li>
      <li class="mb-3 utility">Security</li>
    </ul>
  </div>

  <!-- Location -->
  <div class="container mt-5">
    <h2 class="h5 mb-3"><b>Location</b></h2>
    <p class="mb-md-3">No.24 Anifowose street behind Tincan road, Surulere Lagos.</p>
    <img width="80%" src="{{ asset('main/img/location.png') }}" alt="location" />
  </div>

  <!-- House Owner -->
  <div class="container mt-5">
    <h2 class="h5"><b>House owner/agent details</b></h2>
    <div class="row">
      <div class="col-4 col-md-2">
        <img src="{{ asset('main/img/avatar.png') }}" alt="" class="img-fluid">
      </div>
      <div class="col-7 col-md-2 mt-1">
        <p class="mb-2 name">Gabriel Malaki</p>
        <p class="mb-2">Joined April, 2021</p>
        <div class="d-flex align-content-center">
          <img src="{{ asset('main/img/verified.png') }}" alt="" class="img-fluid"> <span class="my-auto verify">&nbsp;Verified</span>
        </div>
      </div>
      <div class="col-md-8"></div>
      <div class="col-12 col-md-3 my-2">
        <button class="btn contact btn-md-lg btn-md-block ml-2 ml-md-3">Contact House owner/agent</button>
      </div>
    </div>
  </div>

  <div class="container my-2">
    <hr class="" />
  </div>

  <!-- Similar Hostels -->
  <div class="container mt-5 mb-md-5">
    <h2 class="h5"><b>Similar hostels</b></h2>
    <div class="card mx-2 p-2 d-md-none">
      <div class="position-relative"><img class="card-img-top" src="{{ asset('main/img/Rectangle 2.png') }}" alt="Card image cap"></div>
      <div class="position-absolute love"><img class="card-img-top" src="{{ asset('main/img/love.png') }}" alt="Card image cap"></div>
      <div class="card-body">
        <p class="card-text text-primary">Surulere, Lagos</p>
        <h5 class="card-title text-dark h5 mt-2"><b>The chronicles hostel lodge</b></h5>
        <p class="card-subtitle text-secondary lead">1 room self contain</p>
      </div>
    </div>
    <div id="carouselMain" class="carousel slide position-relative d-none d-md-block pt-md-5" data-ride="carouselMain">
      <ol class="carousel-indicators d-none">
        <li data-target="#carouselMain" data-slide-to="0" class="active"></li>
        <li data-target="#carouselMain" data-slide-to="1"></li>
        <li data-target="#carouselMain" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner d-md-block">
        <div class="carousel-item active">
          <div class="d-block w-100" alt="First slide">
            <div class="d-flex justify-content-around">
              <div>
                <div class="card mx-2 p-2 border-0">
                  <div class="position-relative">
                    <div class="card-img-top">
                      <img class="d-block w-100" src="{{ asset('main/img/hostel2.png') }}" alt="First slide">
                      <!-- <div id="carousel2" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                              <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel2" data-slide-to="1"></li>
                              <li data-target="#carousel2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/hostel2.png" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Third slide">
                              </div>
                            </div>
                          </div> -->
                    </div>
                  </div>
                  <div class="position-absolute love"><img class="card-img-top" src="{{ asset('main/img/love.png') }}" alt="Card image cap">
                  </div>
                  <div class="card-body p-0">
                    <p class="card-text text-primary location mt-2">Surulere, Lagos</p>
                    <h5 class="card-title text-dark h6 my-0"><b>The chronicles hostel lodge</b></h5>
                    <p class="card-subtitle text-secondary mt-0">1 room self contain</p>
                    <p class="card-title text-dark mt-2"><b><span class="h6 text-bold">#60,000</span></b>p/a</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="card mx-2 p-2 border-0">
                  <div class="position-relative">
                    <div class="card-img-top">
                      <img class="d-block w-100" src="{{ asset('main/img/hostel2.png') }}" alt="First slide">
                      <!-- <div id="carousel3" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                              <li data-target="#carousel3" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel3" data-slide-to="1"></li>
                              <li data-target="#carousel3" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/hostel2.png" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Third slide">
                              </div>
                            </div>
                          </div> -->
                    </div>
                  </div>
                  <div class="position-absolute love"><img class="card-img-top" src="{{ asset('main/img/love.png') }}" alt="Card image cap">
                  </div>
                  <div class="card-body p-0">
                    <p class="card-text text-primary location mt-2">Surulere, Lagos</p>
                    <h5 class="card-title text-dark h6 my-0"><b>The chronicles hostel lodge</b></h5>
                    <p class="card-subtitle text-secondary mt-0">1 room self contain</p>
                    <p class="card-title text-dark mt-2"><b><span class="h6 text-bold">#60,000</span></b>p/a</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="card mx-2 p-2 border-0">
                  <div class="position-relative">
                    <div class="card-img-top">
                      <img class="d-block w-100" src="{{ asset('main/img/hostel2.png') }}" alt="First slide">
                      <!-- <div id="carousel4" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                              <li data-target="#carousel4" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel4" data-slide-to="1"></li>
                              <li data-target="#carousel4" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/hostel2.png" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Third slide">
                              </div>
                            </div>
                          </div> -->
                    </div>
                  </div>
                  <div class="position-absolute love"><img class="card-img-top" src="{{ asset('main/img/love.png') }}" alt="Card image cap">
                  </div>
                  <div class="card-body p-0">
                    <p class="card-text text-primary location mt-2">Surulere, Lagos</p>
                    <h5 class="card-title text-dark h6 my-0"><b>The chronicles hostel lodge</b></h5>
                    <p class="card-subtitle text-secondary mt-0">1 room self contain</p>
                    <p class="card-title text-dark mt-2"><b><span class="h6 text-bold">#60,000</span></b>p/a</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block w-100" alt="Second slide">
            <div class="d-flex justify-content-around">
              <div>
                <div class="card mx-2 p-2 border-0">
                  <div class="position-relative">
                    <div class="card-img-top">
                      <img class="d-block w-100" src="{{ asset('main/img/hostel2.png') }}" alt="First slide">
                      <!-- <div id="carousel2" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                              <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel2" data-slide-to="1"></li>
                              <li data-target="#carousel2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/hostel2.png" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Third slide">
                              </div>
                            </div>
                          </div> -->
                    </div>
                  </div>
                  <div class="position-absolute love"><img class="card-img-top" src="{{ asset('main/img/love.png') }}" alt="Card image cap">
                  </div>
                  <div class="card-body p-0">
                    <p class="card-text text-primary location mt-2">Surulere, Lagos</p>
                    <h5 class="card-title text-dark h6 my-0"><b>The chronicles hostel lodge</b></h5>
                    <p class="card-subtitle text-secondary mt-0">1 room self contain</p>
                    <p class="card-title text-dark mt-2"><b><span class="h6 text-bold">#60,000</span></b>p/a</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="card mx-2 p-2 border-0">
                  <div class="position-relative">
                    <div class="card-img-top">
                      <img class="d-block w-100" src="{{ asset('main/img/hostel2.png') }}" alt="First slide">
                      <!-- <div id="carousel3" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                              <li data-target="#carousel3" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel3" data-slide-to="1"></li>
                              <li data-target="#carousel3" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/hostel2.png" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Third slide">
                              </div>
                            </div>
                          </div> -->
                    </div>
                  </div>
                  <div class="position-absolute love"><img class="card-img-top" src="{{ asset('main/img/love.png') }}" alt="Card image cap">
                  </div>
                  <div class="card-body p-0">
                    <p class="card-text text-primary location mt-2">Surulere, Lagos</p>
                    <h5 class="card-title text-dark h6 my-0"><b>The chronicles hostel lodge</b></h5>
                    <p class="card-subtitle text-secondary mt-0">1 room self contain</p>
                    <p class="card-title text-dark mt-2"><b><span class="h6 text-bold">#60,000</span></b>p/a</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="card mx-2 p-2 border-0">
                  <div class="position-relative">
                    <div class="card-img-top">
                      <img class="d-block w-100" src="{{ asset('main/img/hostel2.png') }}" alt="First slide">
                      <!-- <div id="carousel4" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                              <li data-target="#carousel4" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel4" data-slide-to="1"></li>
                              <li data-target="#carousel4" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/hostel2.png" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Third slide">
                              </div>
                            </div>
                          </div> -->
                    </div>
                  </div>
                  <div class="position-absolute love"><img class="card-img-top" src="{{ asset('main/img/love.png') }}" alt="Card image cap">
                  </div>
                  <div class="card-body p-0">
                    <p class="card-text text-primary location mt-2">Surulere, Lagos</p>
                    <h5 class="card-title text-dark h6 my-0"><b>The chronicles hostel lodge</b></h5>
                    <p class="card-subtitle text-secondary mt-0">1 room self contain</p>
                    <p class="card-title text-dark mt-2"><b><span class="h6 text-bold">#60,000</span></b>p/a</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block w-100" alt="Third slide">
            <div class="d-flex justify-content-around">
              <div>
                <div class="card mx-2 p-2 border-0">
                  <div class="position-relative">
                    <div class="card-img-top">
                      <img class="d-block w-100" src="{{ asset('main/img/hostel2.png') }}" alt="First slide">
                      <!-- <div id="carousel2" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                              <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel2" data-slide-to="1"></li>
                              <li data-target="#carousel2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/hostel2.png" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Third slide">
                              </div>
                            </div>
                          </div> -->
                    </div>
                  </div>
                  <div class="position-absolute love"><img class="card-img-top" src="{{ asset('main/img/love.png') }}" alt="Card image cap">
                  </div>
                  <div class="card-body p-0">
                    <p class="card-text text-primary location mt-2">Surulere, Lagos</p>
                    <h5 class="card-title text-dark h6 my-0"><b>The chronicles hostel lodge</b></h5>
                    <p class="card-subtitle text-secondary mt-0">1 room self contain</p>
                    <p class="card-title text-dark mt-2"><b><span class="h6 text-bold">#60,000</span></b>p/a</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="card mx-2 p-2 border-0">
                  <div class="position-relative">
                    <div class="card-img-top">
                      <img class="d-block w-100" src="{{ asset('main/img/hostel2.png') }}" alt="First slide">
                      <!-- <div id="carousel3" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                              <li data-target="#carousel3" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel3" data-slide-to="1"></li>
                              <li data-target="#carousel3" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/hostel2.png" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Third slide">
                              </div>
                            </div>
                          </div> -->
                    </div>
                  </div>
                  <div class="position-absolute love"><img class="card-img-top" src="{{ asset('main/img/love.png') }}" alt="Card image cap">
                  </div>
                  <div class="card-body p-0">
                    <p class="card-text text-primary location mt-2">Surulere, Lagos</p>
                    <h5 class="card-title text-dark h6 my-0"><b>The chronicles hostel lodge</b></h5>
                    <p class="card-subtitle text-secondary mt-0">1 room self contain</p>
                    <p class="card-title text-dark mt-2"><b><span class="h6 text-bold">#60,000</span></b>p/a</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="card mx-2 p-2 border-0">
                  <div class="position-relative">
                    <div class="card-img-top">
                      <img class="d-block w-100" src="{{ asset('main/img/hostel2.png') }}" alt="First slide">
                      <!-- <div id="carousel4" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                              <li data-target="#carousel4" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel4" data-slide-to="1"></li>
                              <li data-target="#carousel4" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/hostel2.png" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/hostel2.png" alt="Third slide">
                              </div>
                            </div>
                          </div> -->
                    </div>
                  </div>
                  <div class="position-absolute love"><img class="card-img-top" src="{{ asset('main/img/love.png') }}" alt="Card image cap">
                  </div>
                  <div class="card-body p-0">
                    <p class="card-text text-primary location mt-2">Surulere, Lagos</p>
                    <h5 class="card-title text-dark h6 my-0"><b>The chronicles hostel lodge</b></h5>
                    <p class="card-subtitle text-secondary mt-0">1 room self contain</p>
                    <p class="card-title text-dark mt-2"><b><span class="h6 text-bold">#60,000</span></b>p/a</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="position-absolute identifier2">
        <a class="" href="#carouselMain" role="button" data-slide="prev">
          <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
          <span class="oi oi-arrow-thick-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <span class="h3">&nbsp;&nbsp;&nbsp;</span>
        <a class="" href="#carouselMain" role="button" data-slide="next">
          <!-- <span class="carousel-control-next-icon"></span> -->
          <span class="oi oi-arrow-thick-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!-- <span class="oi oi-arrow-thick-right" aria-hidden="true"></span> -->
      </div>
    </div>
  </div>

@endsection
