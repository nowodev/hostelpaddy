{{-- Search bar --}}
<section class="mb-5">
  <div class="container">
    <div class="row pt-5">
      <div class="col-8">
        <form action="#">
          <input class="form-control" type="text" placeholder="  Search location apartment..."/>
          {{-- <i class="fa fa-search" aria-hidden="true"></i> --}}
        </form>
      </div>
      <div class="col-2">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#searchFilter">
          <i class="fa fa-filter"></i>
          Filter
        </button>

        <!-- The Modal -->
        <div class="modal fade" id="searchFilter">
          <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h1 class="modal-title">Filter</h1>
                <button type="button" class="close" data-dismiss="modal">×</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                {{--fee range--}}
                <div id="fee-range">
                  <h4>Fee range</h4>
                  <div class="row">
                    <div class="col-4">
                      <label for="min">Min</label>
                      <input type="text" id="min" class="form-control" name="min">
                    </div>

                    <div class="col-4">
                      <label for="max">Max</label>
                      <input type="text" id="max" class="form-control" name="max">
                    </div>
                  </div>
                </div>

                {{--property type--}}
                <div id="property-type" class="mt-3">
                  <h4>Property type</h4>
                  <div class="row">
                    @foreach($properties as $property)
                      <div class="col-4">
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="property_{{ $property->id }}"
                                 name="property">
                          <label class="custom-control-label"
                                 for="property_{{ $property->id }}">{{ $property->name }}</label>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
                {{--rooms--}}
                {{--hostel location--}}
                {{--rent period--}}
                {{--utilities--}}
                {{--hostel rules--}}
                {{--features--}}
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>

      </div>

      <div class="col-2">
        <span class="dropdown">
          <button class="btn btn-outline-primary dropdown-toggle position-relative" type="button"
                  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-sort-amount-down"></i>
            Sort
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Low to High price</a>
            <a class="dropdown-item" href="#">High to Low price</a>
            <a class="dropdown-item" href="#">Recently updated</a>
            <a class="dropdown-item" href="#">Recently added</a>
          </div>
        </span>
      </div>
    </div>
  </div>
</section>

{{-- @include('partials.main.filter') --}}