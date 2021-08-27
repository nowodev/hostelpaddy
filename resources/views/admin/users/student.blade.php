@extends('layouts.admin.app')

@section('content')
  <section class="mt-5">
    <h1>Students</h1>
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
          @foreach ($students as $key => $student)
            <tr>
              <td class="px-4 py-3">{{ $students->firstItem() + $key }}</td>
              <td class="px-4 py-3">{{ $student->name }}</td>
              <td class="px-4 py-3">{{ $student->phone }}</td>
              <td class="px-4 py-3">
                @if ($student->available == 0)
                  <livewire:pending message="Pending" />
                @elseif ($student->available == 1)
                  <livewire:verified message="Available" />
                @endif
              </td>
              <td class="px-4 py-3">{{ $student->created_at }}</td>
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

      {{ $students->withQueryString()->links() }}
    </div>
  </section>
@endsection