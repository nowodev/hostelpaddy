@extends('layouts.agents.app')

@section('title', 'Agent - List Hostel')

@section('styles')
  <link type="text/css" href="{{ asset('main/css/form.css') }}" rel="stylesheet"/>
@endsection

@section('content')
  <div class="container">
    <div class="mb-3">
      <p>
        Manage Listing <i class="fa fa-chevron-right"></i> Edit hostel
        <span class="float-right">
          <a href="{{ route('agent.hostels.index') }}"><i class="fa-2x far fa-times-circle"></i></a>
        </span>
      </p>
    </div>

    <form action="{{ route('agent.hostels.update', [$hostel]) }}" enctype="multipart/form-data" method="POST">
      @csrf
      @method('PUT')

      @include('agents.hostels.form', ['edit' => true])
    </form>

  </div>
@endsection

@section('script')
  <script src="{{ asset('main/js/agent/form.js') }}"></script>

  <script type="text/javascript">
      $(document).ready(function () {
          $('#state-dd').on('change', function() {
              let idState = this.value;
              $("#city-dd").html('');
              $.ajax({
                  url: "{{ route('cities') }}",
                  type: "POST",
                  data: {
                      state_id: idState,
                      _token: '{{ csrf_token() }}'
                  },
                  dataType: 'json',
                  success: function(res) {
                      $('#city-dd').html('<option value="">Select City</option>');
                      $.each(res.cities, function(key, value) {
                          $("#city-dd").append('<option value="' + value
                              .id + '">' + value.name + '</option>');
                      });
                  }
              });
          });
      });
  </script>
@endsection