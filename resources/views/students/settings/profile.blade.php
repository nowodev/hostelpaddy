@extends('layouts.students.app')

@section('styles')
  {{-- <link type="text/css" href="{{ asset('main/css/styles.css') }}" rel="stylesheet" /> --}}
  {{-- <link type="text/css" href="{{ asset('main/css/student/account.css') }}" rel="stylesheet" /> --}}
@endsection

@section('title', 'Student - Profile')

@section('content')
  <x-student.hamburger>
    {{ Breadcrumbs::render('profile') }}
  </x-student.hamburger>

@endsection