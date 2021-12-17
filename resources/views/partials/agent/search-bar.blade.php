{{-- Search bar --}}
<section class="mb-5">
  <div class="container">
    <div class="row pt-5">
      <div class="col-sm-6 col-md-8">
        <form action="{{ route('agent.hostel.search') }}">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="q" value="{{ $q ?? '' }}" placeholder="Search listing">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-4 col-md-3">
        <a href="{{ route('agent.hostels.create') }}">
          <span class="btn btn-outline-primary">
            <i class="fa fa-plus-circle"></i>
            List a hostel
          </span>
        </a>
      </div>
    </div>
  </div>
</section>
