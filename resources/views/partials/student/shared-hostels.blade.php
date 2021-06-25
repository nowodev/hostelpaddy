{{-- Hostel Details --}}

@for ($q = 0; $q <= 2; $q++)
<div class="row mb-3">
  @for ($i = 0; $i <= 2; $i++)
    <div class="col">
      <div class="card">
        <div class="row no-gutters">
          <img class="card-pill-img card-img-top img-fluid" src="{{ asset('main/img/hostel.png') }}" alt="">
          <div class="card-img-overlay">
            <i class="fa-2x fab fa-gratipay mt-n2 text-white"></i>
          </div>
          <div class="col">
            <span class="card-body fs-6">
              <p class="card-text">1 Room Duplex Hostel</p>
              <p>Host: Ademola Tunji</p>
              <p>Bedroom, wardrobe, bathroom...</p>
              <p>Surlere Lagos.</p>
              <p class="">#5,000/monthly</p>
            </span>
          </div>
        </div>
      </div>
    </div>
  @endfor
</div>
@endfor
