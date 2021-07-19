@extends('layouts.students.app')
@section('title', 'Student - Share Hostel')

@section('content')
  <div class="container">
    <div class="mb-3">
      <p>
        Hostel mate <i class="fa fa-caret dropdown-toggle"></i> Shared hostel
        <span class="float-right">x</span>
      </p>
    </div>

    <form action="{{ route('student.hostel-mate.store') }}" enctype="multipart/form-data" method="POST">
      @csrf

      @include('students.share-hostels.form')


      {{-- <button type="submit" class="btn btn-primary">
        Add Hostel
      </button> --}}

    </form>

  </div>
@endsection

@section('script')
 <script src="{{ asset('main/js/student/form.js') }}"></script>
@endsection