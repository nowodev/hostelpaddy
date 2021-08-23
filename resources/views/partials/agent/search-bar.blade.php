{{-- Search bar --}}
<section class="mb-5">
  <div class="container">
    <div class="row pt-5">
      <div class="col-sm-6 col-md-8">
        <form action="#">
          <input class="form-control" type="text" placeholder="  Seach listing"/>
          {{-- <i class="fa fa-search" aria-hidden="true"></i> --}}
        </form>
      </div>
      <div class="col-sm-4 col-md-3">
        <a href="{{ route('agent.listings.create') }}">
          <span class="btn btn-outline-primary">
            <i class="fa fa-plus-circle"></i>
            List a hostel
          </span>
        </a>
      </div>
    </div>
  </div>
</section>
