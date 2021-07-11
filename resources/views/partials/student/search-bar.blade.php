{{-- Search bar --}}
<section class="mb-5">
  <div class="container">
    <div class="row pt-5">
      <div class="col-sm-8 col-md-10">
        <form action="#">
          <input class="form-control" type="text" placeholder="  Seach location apartment..." />
          {{-- <i class="fa fa-search" aria-hidden="true"></i> --}}
        </form>
      </div>
      <div class="col-sm-2 col-md-1">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#searchFilter">
          <i class="fa fa-filter"></i>
          Filter
        </button>
      </div>
      <div class="col-sm-2 col-md-1">
        <span class="dropdown">
          <button class="btn btn-outline-primary dropdown-toggle position-relative" type="button"
            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-sort-amount-down"></i>
            Sort
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </span>
      </div>
    </div>
  </div>
</section>

{{-- @include('partials.main.filter') --}}