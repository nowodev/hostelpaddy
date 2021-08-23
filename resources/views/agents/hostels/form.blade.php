<main>
  <div class="row">
    <nav class="col-sm-3 col-4 my-auto">
      <ul class="nav flex-column">
        <li class="nav-link"><span class="text-info" id="bullet1">o</span> Property details</li>
        <li class="nav-link"><span class="text-black-50" id="bullet2">o</span> Amenities</li>
        <li class="nav-link"><span class="text-black-50" id="bullet3">o</span> Rules</li>
        <li class="nav-link"><span class="text-black-50" id="bullet4">o</span> Photos & video</li>
        <li class="nav-link"><span class="text-black-50" id="bullet5">o</span> Payment</li>
      </ul>
    </nav>

    <div class="col-sm-9 col-8">
      <x-main.errors/>

      {{-- First part of form --}}
      <section class="animated" id="property-details">
        <h1>Property details</h1>
        <p>In order to list your hostel, we need you to provide some information on the property.</p>

        <h5>Property Information</h5>

        <div class="form-label-group">
          <input type="text" id="hostel_name" name="hostel_name" class="form-control" placeholder="Hostel Name"
                 autofocus value="{{ old('hostel_name', $hostel->hostel_name) }}">
          <label for="hostel_name">Hostel Name</label>
        </div>

        <div class="row">
          <div class="col-6">
            <label for="state">State</label>
            <div class="form-label-group">
              <select name="state" id="state" class="custom-select" autofocus>
                <option value=""></option>
                @foreach($states as $state)
                  <option
                      value="{{ $state->name }}" {{ $state->name === old('state', $hostel->state) ? 'selected' : '' }}>{{ $state->name }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-6">
            <label for="city">City</label>
            <div class="form-label-group">
              <select name="city" id="city" class="custom-select" autofocus>
                <option value=""></option>
                @foreach($cities as $city)
                  <option
                      value="{{ $city->name }}" {{ $city->name === old('city', $hostel->city) ? 'selected' : '' }}>{{ $city->name }}</option>
                @endforeach
              </select>
            </div>
            {{--            <div class="form-label-group">--}}
            {{--              <input type="text" list="cities" id="city" value="" class="form-control" placeholder="City" autofocus>--}}
            {{--              <datalist id="cities">--}}
            {{--                @foreach($cities as $city)--}}
            {{--                  <option value="{{ $city->name }}">{{ $city->name }}</option>--}}
            {{--                @endforeach--}}
            {{--              </datalist>--}}
            {{--              <label for="rooms">City</label>--}}
            {{--            </div>--}}
          </div>
        </div>


        <div class="form-label-group">
          <input type="text" id="address" name="address" class="form-control" placeholder="Full Address" autofocus
                 value="{{ old('address', $hostel->address) }}">
          <label for="address">Full Address</label>
        </div>

        <div class="form-group my-3">
          <h5>Choose Property Type</h5>

          <div class="row">
            @foreach ($properties as $property)
              <div class="col-6">
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" class="custom-control-input" id="property_{{ $property->id }}" name="property"
                         value="{{ $property->name }}" {{ $property->name === old('property', $hostel->property) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="property_{{ $property->id }}">{{ $property->name }}</label>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <h5>Hostel Fee</h5>

        <div class="row">
          <div class="col-md-4">
            <div class="form-label-group">
              <input type="number" id="amount" name="amount" class="form-control" placeholder="Enter Amount" autofocus
                     value="{{ old('amount', $hostel->amount) }}">
              <label for=" amount">Enter Amount</label>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-label-group">
              <input type="number" list="encodings" id="roomNum" name="roomNum" class="form-control"
                     placeholder="Number of Rooms" autofocus value="{{ old('roomNum', $hostel->roomNum) }}">
              <datalist id="encodings">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </datalist>

              <label for="roomNum">Number of Rooms</label>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-span-4 sm:col-span-3 lg:col-span-3">
              {{--              <label for="period">Rent Period</label>--}}
              <select id="period" name="period" class="custom-select custom-select-lg">
                <option value=""></option>
                @foreach($periods as $period)
                  <option
                      value="{{ $period->name }}" {{ $period->name === old('period', $hostel->period) ? 'selected' : '' }}>{{ $period->name }}</option>
                @endforeach
              </select>
            </div>

            {{--            <div class="form-label-group">--}}
            {{--              <input type="text" list="period" id="period" value="" class="form-control" placeholder="Rent Period"--}}
            {{--                     autofocus>--}}
            {{--              <datalist id="period">--}}
            {{--                <option value="Yearly" {{ 'Yearly' === old('period') ? 'selected' : '' }}>Yearly</option>--}}
            {{--                <option value="Quarterly" {{ 'Quarterly' === old('period') ? 'selected' : '' }}>Quarterly</option>--}}
            {{--                <option value="Monthly" {{ 'Monthly' === old('period') ? 'selected' : '' }}>Monthly</option>--}}
            {{--              </datalist>--}}

            {{--              <label for="rooms">Rent Period</label>--}}
            {{--            </div>--}}
          </div>
        </div>

        <div id="continueToAmenities" class="btn btn-primary float-right">Continue</div>
      </section>

      {{-- Second part of form --}}
      <section id="amenities" class="animated displayNone">
        <h1 id="title1"></h1>
        <p id="subtitle1"></p>

        <div class="form-group my-3">
          <h5>Select your property features</h5>

          <div class="row">
            @foreach ($amenities as $amenity)
              <div class="col-6">
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="amenity_{{ $amenity->id }}" name="amenities[]"
                         value="{{ $amenity->id }}"
                      {{ in_array($amenity->id, old('amenities', $hostel->amenities->pluck('id')->toArray())) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="amenity_{{ $amenity->id }}">{{ $amenity->name }}</label>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <div class="form-group my-3">
          <h5>Select your property utilities</h5>

          <div class="row">
            @foreach ($utilities as $utility)
              <div class="col-6">
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="utility_{{ $utility->id }}" name="utilities[]"
                         value="{{ $utility->id }}"
                      {{ in_array($utility->id, old('utilities', $hostel->utilities->pluck('id')->toArray())) ? 'checked' : '' }}>
                  <label class=" custom-control-label" for="utility_{{ $utility->id }}">{{ $utility->name }}</label>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <div class="btn" onclick="backToDetails()">Go back</div>
        <div id="continueToRules" class="btn btn-primary float-right">Continue</div>
      </section>

      {{-- Third part of form --}}
      <section id="rules" class="animated displayNone">
        <h1 id="title2"></h1>
        <p id="subtitle2"></p>

        <div class="form-group my-3">
          <h5>Select your hostel rules</h5>

          <div class="row">
            @foreach ($rules as $rule)
              <div class="col-6">
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="rule_{{ $rule->id }}" name="rules[]"
                         value="{{ $rule->id }}"
                      {{ in_array($rule->id, old('rules', $hostel->rules->pluck('id')->toArray())) ? 'checked' : '' }}>
                  <label class=" custom-control-label" for="rule_{{ $rule->id }}">{{ $rule->name }}</label>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <div class="form-group my-3">
          <h5>Preferred Tenants</h5>

          <p>Specify the type of tenant you will prefer to have<br> such as gender, school
            level and other personalities</p>

          <div class="form-label-group">
            <input type="text" id="choice" name="tenantType" class="form-control" placeholder="Preference" required
                   value="{{ old('tenantType', $hostel->tenantType) }}">
            <label for="choice">Preference</label>
          </div>
        </div>

        <div class="btn" onclick="backToAmenities()">Go back</div>
        <div id="continueToPhotos" class="btn btn-primary float-right">Continue</div>
      </section>

      {{-- Fourth part of form --}}
      <section id="photos" class="animated displayNone">
        <h1 id="title3"></h1>
        <p id="subtitle3"></p>

        <div class="form-group my-3">
          <h4>Upload photo</h4>
          <p>Upload 3 to 5 clear images of the hostel for proper display. <br>jpeg & png format only.</p>

          <input type="file" class="filepond" name="image[]" multiple data-allow-reorder="true"
                 data-max-file-size="3MB" data-max-files="3">

          <h4>Upload video</h4>
          <p>Upload a clear video to show the hostel. Video must not be more than a minute long. <br>mp4 format only.
          </p>

          <input type="file" class="filepond" name="video[]" multiple data-allow-reorder="true"
                 data-max-file-size="3MB" data-max-files="3">
        </div>

        <div class="btn" onclick="backToRules()">Go back</div>
        <div id="continueToPayment" class="btn btn-primary float-right">Continue</div>
      </section>

      {{-- Fifth part of form --}}
      <section id="payment" class="animated displayNone">
        <h1 id="title4"></h1>
        <p id="subtitle4"></p>

        <div class="form-group my-3">
          <input type="text" name="" id="" class="form-control" placeholder="Type here">
        </div>

        <div class="btn" onclick="backToPhotos()">Go back</div>
        <button type="submit" class="btn btn-primary float-right">Make Payment</button>
      </section>


    </div>

  </div>
</main>