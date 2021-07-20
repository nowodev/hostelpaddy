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

        <form action="" id="filterForm">
          <!-- The Modal -->
          <div class="modal fade" id="searchFilter">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h3 class="modal-title">Filter</h3>
                  <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  {{--fee range--}}
                  <div id="fee-range">
                    <h4>Fee Range</h4>
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
                    <h4>Property Type</h4>
                    <div class="row">
                      @foreach($properties->chunk(2) as $key => $others)
                        <div class="col-4">
                          @foreach ($others as $property)
                            <div class="custom-control custom-checkbox mb-2">
                              <input type="checkbox" class="custom-control-input" id="property_{{ $property->id }}"
                                     name="property[]">
                              <label class="custom-control-label"
                                     for="property_{{ $property->id }}">{{ $property->name }}</label>
                            </div>
                          @endforeach
                        </div>
                      @endforeach
                    </div>
                  </div>

                  {{--rooms--}}
                  <div id="rooms" class="mt-3">
                    <h4>Rooms</h4>
                    <div class="row">
                      <div class="col-4">
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="room_1" name="room">
                          <label class="custom-control-label" for="room_1">1 Room</label>
                        </div>

                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="room_2" name="room">
                          <label class="custom-control-label" for="room_2">2 Rooms</label>
                        </div>

                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="room_3" name="room">
                          <label class="custom-control-label" for="room_3">3 Rooms</label>
                        </div>

                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="more_rooms" name="room">
                          <label class="custom-control-label" for="more_rooms">More Rooms</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  {{--hostel location--}}
                  <div id="hostel-location" class="mt-3">
                    <h4>Hostel Location</h4>
                    <div class="row">
                      <div class="col-4">
                        <select class="custom-select" name="location">
                          <option value=""></option>
                          @foreach($location as $loc)
                            <option value="{{ $loc->id }}">{{ $loc->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>

                  {{--rent period--}}
                  <div id="rent-period" class="mt-3">
                    <h4>Rent Period</h4>
                    <div class="row">
                      <div class="col-4">
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="yearly" name="period">
                          <label class="custom-control-label" for="yearly">Yearly</label>
                        </div>

                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="two_years" name="period">
                          <label class="custom-control-label" for="two_years">2 Years</label>
                        </div>

                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="two_plus_years" name="period">
                          <label class="custom-control-label" for="two_plus_years">2+ Years</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  {{--utilities--}}
                  <div id="utilities" class="mt-3">
                    <h4>Utilities</h4>
                    <div class="row">
                      @foreach($utilities->chunk(2) as $key => $others)
                        <div class="col-4">
                          @foreach ($others as $utility)
                            <div class="custom-control custom-checkbox mb-2">
                              <input type="checkbox" class="custom-control-input" id="utility_{{ $utility->id }}"
                                     name="utility[]">
                              <label class="custom-control-label"
                                     for="utility_{{ $utility->id }}">{{ $utility->name }}</label>
                            </div>
                          @endforeach
                        </div>
                      @endforeach
                    </div>
                  </div>

                  {{--hostel rules--}}
                  <div id="hostel-rules" class="mt-3">
                    <h4>Hostel Rules</h4>
                    <div class="row">
                      @foreach($rules->chunk(2) as $key => $others)
                        <div class="col-4">
                          @foreach ($others as $rule)
                            <div class="custom-control custom-checkbox mb-2">
                              <input type="checkbox" class="custom-control-input" id="rule_{{ $rule->id }}"
                                     name="rule[]">
                              <label class="custom-control-label"
                                     for="rule_{{ $rule->id }}">{{ $rule->name }}</label>
                            </div>
                          @endforeach
                        </div>
                      @endforeach
                    </div>
                  </div>

                  {{--features--}}
                  <div id="features" class="mt-3">
                    <h4>Features</h4>
                    <div class="row">
                      @foreach($amenities->chunk(2) as $key => $others)
                        <div class="col-4">
                          @foreach ($others as $amenity)
                            <div class="custom-control custom-checkbox mb-2">
                              <input type="checkbox" class="custom-control-input" id="amenity_{{ $amenity->id }}"
                                     name="amenity[]">
                              <label class="custom-control-label"
                                     for="amenity_{{ $property->id }}">{{ $amenity->name }}</label>
                            </div>
                          @endforeach
                        </div>
                      @endforeach
                    </div>
                  </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer d-flex justify-content-between">
                  <input type="button" class="btn" onclick="clear()" value="Clear">
{{--                  <button type="button" class="btn" onclick="clear()">Clear all filters</button>--}}
                  <button type="button" class="btn btn-primary">Apply Filter</button>
                </div>

              </div>
            </div>
          </div>

        </form>
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