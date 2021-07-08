@extends('layouts.students.app')

@section('styles')
  <link type="text/css" href="{{ asset('main/css/homestyle.css') }}" rel="stylesheet" />
@endsection

{{-- @section('title', 'Student - Home') --}}
@section('title')
  {{ auth('student')->user()->name }} - Student
@endsection

@section('content')
  @include('partials.student.all-hostels')
@endsection
