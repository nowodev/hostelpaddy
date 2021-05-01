{{-- Search functionality will be integrated into pages directly and not be a seperate page entirely. For example, in the listed hostels section from the navbar, one can filter through the hostels and so on...   --}}

@extends('layouts.main.app')

@section('content')
  <div class="container mt-2">
    <form action="{{ route('search') }}">
      @csrf

      <div class="row">
        <div class="col-4 col-sm-3 col-md-3">
          <input class="form-control" type="search" name="q" value="{{ $q }}">
        </div>

        <div class="col">
          <select name="sortBy" class="form-control" value="{{ $sortBy }}">
            @foreach (['hostel_name', 'state', 'city', 'amount', 'property', 'roomNum'] as $col)
              <option @if ($col == $sortBy) selected @endif
                value="{{ $col }}">{{ $col }}</option>
            @endforeach
          </select>
        </div>
        <div class="col">
          <select name="orderBy" class="form-control" value="{{ $orderBy }}">
            @foreach (['ASC', 'DESC'] as $order)
              <option @if ($order == $orderBy) selected @endif
                value="{{ $order }}">{{ $order }}</option>
            @endforeach
          </select>
        </div>
        <div class="col">
          <select name="perPage" class="form-control" value="{{ $perPage }}">
            @foreach (['10', '20', '50', '100'] as $page)
              <option @if ($page == $perPage) selected @endif
                value="{{ $page }}">{{ $page }}</option>
            @endforeach
          </select>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-primary">Filter</button>
        </div>
      </div>
    </form>
</div>

    <div class="my-5">
      @if ($hostels->isNotEmpty())
        @include('components.main.all-hostels')
      @else
        <div>
          <h2> No hostel found for this field</h2>
        </div>
      @endif
    </div>
@endsection
