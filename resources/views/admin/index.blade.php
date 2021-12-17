@extends('layouts.admin.app')

@section('content')
  <section class="mt-5">
    <h1>Statistics</h1>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="card text-white bg-primary mb-3">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="text-center col-3">
                    <i class="fa-2x fas fa-users"></i>
                  </div>
                  <div class="col">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text">{{ $total }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card text-white bg-secondary mb-3">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="text-center col-3">
                    <i class="fa-2x fas fa-users-cog"></i>
                  </div>
                  <div class="col">
                    <h5 class="card-title">Total Agents</h5>
                    <p class="card-text">{{ $agents->total() }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card text-white bg-success mb-3">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="text-center col-3">
                    <i class="fa-2x fas fa-user-graduate"></i>
                  </div>
                  <div class="col">
                    <h5 class="card-title">Total Students</h5>
                    <p class="card-text">{{ $students->total() }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card text-white bg-info mb-3">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="text-center col-3">
                    <i class="fa-2x fas fa-hotel"></i>
                  </div>
                  <div class="col">
                    <h5 class="card-title">Total Hostels</h5>
                    <p class="card-text">{{ $hostels->total() }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card text-white bg-warning mb-3">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="text-center col-3">
                    <i class="fa-2x fas fa-archway"></i>
                  </div>
                  <div class="col">
                    <h5 class="card-title">Available Hostels</h5>
                    <p class="card-text">{{ $available->count() }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="card text-white bg-danger mb-3">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="text-center col-3">
                    <i class="fa-2x fas fa-monument"></i>
                  </div>
                  <div class="col">
                    <h5 class="card-title">Unavailable Hostels</h5>
                    <p class="card-text">{{ $unavailable->count() }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-5">
        {!! $chart->container() !!}
      </div>

    <script src="{{ asset('js/apexcharts.js') }}"></script>
    {!! $chart->script() !!}
  </section>
@endsection
