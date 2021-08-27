@extends('layouts.admin.app')

@section('content')
  <section class="mt-5">
    <div class="d-flex justify-content-between">
      <div>
        <h1>Amenities</h1>
      </div>
      <div class="align-self-center">
        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#featureModal">Add
          Amenity</button>
      </div>
    </div>

    <div class="table-responsive">
      <x-main.errors />
      <table class="table table-sm table-striped table-hover">
        <thead>
          <tr>
            <th class="px-4 py-3">S/N</th>
            <th class="px-4 py-3">NAME</th>
            <th class="px-4 py-3">ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($amenities as $key => $amenity)
            <tr>
              <td class="px-4 py-3">{{ $amenities->firstItem() + $key }}</td>
              <td class="px-4 py-3">{{ $amenity->name }}</td>
              <td class="px-4 py-3 d-flex justify-items-center">
                <button class="btn btn-sm btn-secondary">
                  <i class="fa fa-pen"></i>
                </button>

                {{-- <a class="dropdown-item" href="{{ route('agent.hostels.edit', [$hostel]) }}">Edit</a> --}}
                <form action="{{ route('admin.amenities.destroy', [$amenity]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger ml-4" onclick="return confirm('Are you sure?')">
                    <i class="fa fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>

      {{ $amenities->withQueryString()->links() }}
    </div>
  </section>

  {{-- add amenity modal --}}
  <div class="modal fade" id="featureModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="featureModal"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="featureModalTitle">Add Amenity</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('admin.amenities.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="amenityName" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="amenityName" name="name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection
