{{-- Search bar --}}
<section class="mb-5">
  <div class="container">
    <div class="row pt-5">
      <div class="col-sm-8 col-md-10">
        <form action="#">
          <input class="form-control" type="text" placeholder="Seach hostel" />
          {{-- <i class="fa fa-search" aria-hidden="true"></i> --}}
        </form>
      </div>
      <div class="col-sm-4 col-md-2">
          <a href="{{ route('student.hostel-mate.create') }}">

              <span class="btn btn-outline-primary">
                  <i class="fa fa-plus-circle"></i>
                  Share a hostel
                </span>
            </a>
      </div>
    </div>
  </div>
</section>
