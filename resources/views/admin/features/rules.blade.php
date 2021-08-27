@extends('layouts.admin.app')

@section('content')
  <section class="mt-5">
    <h1>Rules</h1>
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

      {{ $rules->withQueryString()->links() }}
    </div>
  </section>
@endsection