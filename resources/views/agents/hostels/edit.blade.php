@extends('layouts.agents.app')
@section('title', 'Agent - Edit Hostel')

@section('content')
  <div class="p-10 flex flex-col">

    <div class="mb-3 flex items-center justify-between bg-white py-1 px-1">
      <div class="flex-1 min-w-0">
        <h2 class="text-4xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
          Edit Hostel
        </h2>
      </div>
      <div class="mt-5 flex lg:mt-0 lg:ml-4">
        <a href="{{ route('listings.index') }}" type="button"
          class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Back
        </a>
      </div>
    </div>

    <form action="{{ route('listings.update', [$hostel]) }}" enctype="multipart/form-data" method="POST">
        {{-- <form action="{{ route('listings.update', [$hostel, $amenities, $utilities, $rules, $properties]) }}" enctype="multipart/form-data" method="POST"> --}}
      @csrf
      @method('PUT')

      @include('agents.hostels.form')

      <button type="submit"
        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mt-3">
        Update Hostel
      </button>

    </form>

  </div>
@endsection
