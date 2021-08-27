@extends('layouts.admin.app')

@section('content')
  <section class="mt-5">
    <h1>Hostels</h1>
    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover">
        <thead>
          <tr>
            <th class="px-4 py-3">S/N</th>
            <th class="px-4 py-3">NAME</th>
            <th class="px-4 py-3">ADDRESS</th>
            <th class="px-4 py-3">STATUS</th>
            <th class="px-4 py-3">DATE ADDED</th>
            <th class="px-4 py-3">ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($hostels as $key => $hostel)
            <tr>
              <td class="px-4 py-3">{{ $hostels->firstItem() + $key }}</td>
              <td class="px-4 py-3 d-flex align-items-center">
                <div>
                  <img src="{{ $hostel->main_image }}" class="img-thumbnail" alt="">
                </div>
                <div>
                  {{ $hostel->hostel_name }} <br>
                  <sub>
                    @foreach (\App\Models\City::where('id', $hostel->city)->get() as $city)
                      {{ $city->name }},
                    @endforeach
                    @foreach (\App\Models\State::where('id', $hostel->state)->get() as $state)
                      {{ $state->name }}
                    @endforeach
                  </sub>
                </div>
              </td>
              <td class="px-4 py-3">{{ $hostel->address }}</td>
              <td class="px-4 py-3">
                <div class="form-check form-switch">
                  <input data-id="{{ $hostel->id }}" class="form-check-input" type="checkbox"
                    {{ $hostel->available ? 'checked' : '' }}>
                </div>
                @if ($hostel->available == 0)
                  <livewire:pending message="Unavailable" />
                @elseif ($hostel->available == 1)
                  <livewire:verified message="Available" />
                @endif
              </td>
              <td class="px-4 py-3">{{ $hostel->created_at }}</td>
              <td class="px-4 py-3">
                <button class="btn btn-sm">
                  <i class="fa fa-pen"></i>
                </button>

                <button class="btn btn-sm">
                  <i class="fa fa-trash"></i>
                </button>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>

      {{ $hostels->withQueryString()->links() }}
    </div>
  </section>
@endsection

@section('script')
  <script>
    $(function() {
      $('.form-check-input').change(function() {
        var available = $(this).prop('checked') == true ? 1 : 0;
        var id = $(this).data('id');
        $.ajax({
          type: "GET",
          dataType: "json",
          url: "{{ route('admin.hostels.availablity') }}",
          data: {
            'available': available,
            'id': id
          },
          success: function(data) {
            location.reload();
            console.log(data.success)
          }
        });
      })
    })
  </script>
@endsection
