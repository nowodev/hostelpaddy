<main>
  <div class="row">
    <nav class="col-sm-3 col-4 my-auto">
      <ul class="nav flex-column">
        <li class="nav-link"><span class="text-info" id="bullet1">o</span> Personal details</li>
        <li class="nav-link"><span class="text-black-50" id="bullet2">o</span> Amenities</li>
        <li class="nav-link"><span class="text-black-50" id="bullet3">o</span> Choice of hostel mate</li>
        <li class="nav-link"><span class="text-black-50" id="bullet4">o</span> Photos</li>
        <li class="nav-link"><span class="text-black-50" id="bullet5">o</span> Payment</li>
      </ul>
    </nav>

    <div class="col-sm-9 col-8">
      <x-main.errors/>

      {{-- First part of form --}}
      <section class="animated" id="personal-details">
        <h1>Personal details</h1>
        <p>To list a shared hostel accomodation, we need you to provide some information on the hostel.</p>

        <div class="form-group my-3">
          <label for="contact">Contact number</label>
          <input type="text" class="form-control" name="phone_number" id="contact">
        </div>

        <div class="form-group">
          <label>Select your school year (optional)</label>
          <select name="level" class="custom-select mb-3">
            <option value="" selected>-------</option>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
            <option value="400">400</option>
            <option value="500">500</option>
          </select>
        </div>

        <div class="form-group my-3">
          <label for="contact">Enter your current institution (optional)</label>
          <input type="text" class="form-control" name="institution" id="contact"
                 placeholder="Institution name e.g. ABSU, YabaTech">
        </div>

        <div class="form-group">
          <label for="">Choose your gender</label>
          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="male" name="gender" value="male">
            <label class="custom-control-label" for="male">Male</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="female" name="gender" value="female">
            <label class="custom-control-label" for="female">Female</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="others" name="gender" value="others">
            <label class="custom-control-label" for="others">Others</label>
          </div>
        </div>

        <div id="continueToAmenities" class="btn btn-primary float-right">Continue</div>
      </section>

      {{-- Second part of form --}}
      <section id="amenities" class="animated displayNone">
        <h1 id="title1"></h1>
        <p id="subtitle1"></p>

        <div class="form-group my-3">
          <h4>Select your hostel features</h4>

          <div class="row">
            @foreach ($amenities as $amenity)
              <div class="col-6">
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="amenity_{{ $amenity->id }}" name="amenity[]"
                         value="{{ $amenity->id }}">
                  <label class="custom-control-label" for="amenity_{{ $amenity->id }}">{{ $amenity->name }}</label>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <div class="form-group my-3">
          <h4>Select your hostel utilities</h4>

          <div class="row">
            @foreach ($utilities as $utility)
              <div class="col-6">
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="utility_{{ $utility->id }}" name="utility[]"
                         value="{{ $utility->id }}">
                  <label class=" custom-control-label" for="utility_{{ $utility->id }}">{{ $utility->name }}</label>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <div class="btn" onclick="backToDetails()">Go back</div>
        <div id="continueToChoice" class="btn btn-primary float-right">Continue</div>
      </section>

      {{-- Third part of form --}}
      <section id="choice" class="animated displayNone">
        <h1 id="title2"></h1>
        <p id="subtitle2"></p>

        <div class="form-group my-3">
          <p>Specify the type of students you will prefer to share a hostel with; <br> gender, school
            level and other personalities</p>

          <input type="text" name="choice" class="form-control" placeholder="Type here">
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

          <input type="file" class="filepond" name="photos[]" multiple data-allow-reorder="true"
                 data-max-file-size="3MB" data-max-files="3">

{{--          Video should probably be a later feature--}}
{{--          <h4>Upload video</h4>--}}
{{--          <p>Upload a clear video to show the hostel. Video must not be more than a minute long. <br>mp4 format only.--}}
{{--          </p>--}}

{{--          <input type="file" class="filepond" name="videos[]" multiple data-allow-reorder="true"--}}
{{--                 data-max-file-size="3MB" data-max-files="3">--}}
        </div>

        <div class="btn" onclick="backToChoice()">Go back</div>
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
</main>
