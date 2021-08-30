@extends('layouts.admin.app')

@section('content')
  <section class="mt-5">
    <div class="d-flex justify-content-between">
      <div>
        <h1>Properties</h1>
      </div>
      <div class="align-self-center">
        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#featureModal">Add
          Property</button>
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
          @foreach ($properties as $key => $property)
            <tr>
              <td class="px-4 py-3">{{ $properties->firstItem() + $key }}</td>
              <td class="px-4 py-3">{{ $property->name }}</td>
              <td class="px-4 py-3 d-flex justify-items-center">
                <button class="btn btn-sm btn-secondary">
                  <x-pencil />
                </button>

                {{-- <a class="dropdown-item" href="{{ route('agent.hostels.edit', [$hostel]) }}">Edit</a> --}}
                <form action="{{ route('admin.properties.destroy', [$property]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="ml-4 btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                    <x-trash />
                  </button>
                </form>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>

      {{ $properties->withQueryString()->links() }}
    </div>
  </section>

  {{-- add rules modal --}}
  <div class="modal fade" id="featureModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="featureModal"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="featureModalTitle">Add Property</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('admin.properties.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="propertyName" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="propertyName" name="name">
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
