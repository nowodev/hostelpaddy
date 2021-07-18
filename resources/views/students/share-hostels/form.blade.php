<main>
  <div class="row">
    <nav class="col-sm-3 col-4">
      <ul class="nav flex-column">
        <li class="nav-link"><span class="text-info" id="bullet1">o</span> Personal details</li>
        <li class="nav-link"><span class="text-black-50" id="bullet2">o</span> Amenities</li>
        <li class="nav-link"><span class="text-black-50" id="bullet3">o</span> Choice of hostel mate</li>
        <li class="nav-link"><span class="text-black-50" id="bullet4">o</span> Photos & video</li>
        <li class="nav-link"><span class="text-black-50" id="bullet5">o</span> Payment</li>
      </ul>
    </nav>

    <div class="col-sm-9 col-8">
      {{-- First part of form --}}
      <section class="animated" id="personal-details">
        <h1>Personal details</h1>
        <p>To list a shared hostel accomodation, we need you to provide some information on the hostel.</p>

        <div class="form-group my-3">
          <label for="contact">Contact number</label>
          <input type="text" class="form-control" name="" id="contact">
        </div>

        <div class="form-group col-6 ml-n3">
          <label for="sel1">Select your school year (optional)</label>
          <select name="cars" class="custom-select mb-3">
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
          <input type="text" class="form-control" name="" id="contact"
            placeholder="Institution name e.g. ABSU, YabaTech">
        </div>

        <div class="form-group">
          <label for="">Choose your gender</label>
          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="male" name="gender">
            <label class="custom-control-label" for="male">Male</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="female" name="gender">
            <label class="custom-control-label" for="female">Female</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="others" name="gender">
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
          <h4 for="contact">Select your hostel features</h4>

          <div class="row">
            <div class="col-6">
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
            </div>

            <div class="col-6">
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group my-3">
          <h4 for="contact">Select your hostel utilities</h4>

          <div class="row">
            <div class="col-6">
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
            </div>

            <div class="col-6">
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Bedroom</label>
              </div>
            </div>
          </div>

          <div class="btn" onclick="backToDetails()">Go back</div>
          <div id="continueToChoice" class="btn btn-primary float-right">Continue</div>
        </div>
      </section>

      {{-- Third part of form --}}
      <section id="choice" class="animated displayNone">
        <h1 id="title2"></h1>
        <p id="subtitle2"></p>

        <div class="form-group my-3">
          <p>Specify the type of students you will prefer to share a hostel with; <br> gender, school
            level and other personalities</p>

          <input type="text" name="" id="" class="form-control" placeholder="Type here">
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

          <input type="file" name="" id="">

          <h4>Upload video</h4>
          <p>Upload a clear video to show the hostel. Video must not be more than a minute long. <br>mp4 format only.
          </p>

          <input type="file" name="" id="">
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
