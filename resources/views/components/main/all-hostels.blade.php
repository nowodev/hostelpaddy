<div class="container">
  <h1 class="display-4">All hostels</h1>
  <div class="row">
    @foreach ($hostels as $hostel)
      <div class="col">
        <a href="{{ route('info', [$hostel]) }}">
          <h6>{{ $hostel->hostel_name }}</h6>
          <img src="{{ $hostel->thumbnail }}" class="rounded" style="width: 300px;" alt="Hostel Image">
        </a>
      </div>
    @endforeach
  </div>
</div>
