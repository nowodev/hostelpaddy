@extends('layouts.admin.app')

@section('content')
  <section class="mt-5">
    <div class="d-flex justify-content-between">
        <div>
          <h1>Rules</h1>
        </div>
        <div class="align-self-center">
          <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#featureModal"
            data-bs-whatever="Rule">Add Rule</button>
        </div>
      </div>

    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover">
        <thead>
          <tr>
            <th class="px-4 py-3">S/N</th>
            <th class="px-4 py-3">NAME</th>
            <th class="px-4 py-3">ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($rules as $key => $rule)
            <tr>
              <td class="px-4 py-3">{{ $rules->firstItem() + $key }}</td>
              <td class="px-4 py-3">{{ $rule->name }}</td>
              <td class="px-4 py-3 d-flex justify-items-center">
                <button class="btn btn-sm btn-secondary">
                  <i class="fa fa-pen"></i>
                </button>

                {{-- <a class="dropdown-item" href="{{ route('agent.hostels.edit', [$hostel]) }}">Edit</a> --}}
                <form action="{{ route('admin.rules.destroy', [$rule]) }}" method="POST">
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

      {{ $rules->withQueryString()->links() }}
    </div>
  </section>


  {{-- add rules modal --}}
  <div class="modal fade" id="featureModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="featureModal"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="featureModalTitle">Add Feature</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('admin.rules.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="ruleName" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="ruleName" name="name">
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