@extends('layouts.admin.app')

@section('content')
  <section class="mt-5">
    <h1>Utilities</h1>
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
          @foreach ($utilities as $key => $utility)
            <tr>
              <td class="px-4 py-3">{{ $utilities->firstItem() + $key }}</td>
              <td class="px-4 py-3">{{ $utility->name }}</td>
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

      {{ $utilities->withQueryString()->links() }}
    </div>
  </section>
@endsection