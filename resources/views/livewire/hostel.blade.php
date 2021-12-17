<section class="mt-5">
  <x-flash />
  <h1>Hostels</h1>
  <br>
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
              <button wire:click="makeAvailable({{ $hostel->id }})">
                @if ($hostel->available == 0)
                  <x-admin.pending message="Unavailable" />
                @elseif ($hostel->available == 1)
                  <x-admin.verified message="Available" />
                @endif
              </button>
            </td>
            <td class="px-4 py-3">{{ $hostel->created_at }}</td>
            <td class="px-4 py-3">
              <button class="btn btn-sm">
                <x-trash />
              </button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $hostels->links() }}
  </div>
</section>
