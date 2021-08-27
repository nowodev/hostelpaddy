@extends('layouts.admin.app')

@section('content')
  <section class="mt-5">
    <div class="table-responsive">
      <table class="table table-sm table-striped table-hover">
        <thead>
          <tr>
            <th class="px-4 py-3">S/N</th>
            <th class="px-4 py-3">NAME</th>
            <th class="px-4 py-3">PHONE NUMBER</th>
            <th class="px-4 py-3">STATUS</th>
            <th class="px-4 py-3">DATE ADDED</th>
            <th class="px-4 py-3">ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($agents as $key => $agent)
            <tr>
              <td class="px-4 py-3">{{ $agents->firstItem() + $key }}</td>
              <td class="px-4 py-3">{{ $agent->name }}</td>
              <td class="px-4 py-3">{{ $agent->phone }}</td>
              <td class="px-4 py-3">
                @if ($agent->available == 0)
                  <livewire:pending message="Pending" />
                @elseif ($agent->available == 1)
                  <livewire:verified message="Available" />
                @endif
              </td>
              <td class="px-4 py-3">{{ $agent->created_at }}</td>
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

      {{ $agents->withQueryString()->links() }}
    </div>
  </section>
@endsection