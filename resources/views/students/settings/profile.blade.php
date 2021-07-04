@extends('layouts.students.app')

@section('styles')
  {{-- <link type="text/css" href="{{ asset('main/css/styles.css') }}" rel="stylesheet" /> --}}
  <link type="text/css" href="{{ asset('main/css/student/account.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Student - Profile')

@section('content')
  <x-student.breadcrumbs>
    {{ Breadcrumbs::render('profile') }}
  </x-student.breadcrumbs>

  <div class="container Banner mt-5">
    <h1 class="display1">Profile</h1>
  </div>

  <div class="container p-1 p-md-5" id="notifications">
    <div class="row my-2 my-md-2 py-1 py-md-3">
      <div class="col-10">
        <h6 class="my-2">Full name</h6>
        <p>Micheal Johnson</p>
      </div>
      <div class="edit col-2 align-self-center">
        <button data-toggle="collapse" data-target="#name" onclick="handleToggle(this)" id="edit">Edit</button>
      </div>
      <div class="col-12 collapse mt-2" id="name">
        <form action="">
          <div class="form-group">
            <small><label for="fullname" class="mb-0">Enter fullname:</label></small>
            <input type="text" class="form-control mb-2 borer-0" name="fullname" id="fullname" autofocus required />
          </div>
          <input type="submit" class="btn btn-primary btn-sm mb-0">
        </form>
      </div>
    </div>
    <div class="row my-2 my-md-2 py-1 py-md-3">
      <div class="col-10">
        <h6 class="my-2">Email</h6>
        <a href="mailto:Micheal@gmail.com">Micheal@gmail.com</a>
      </div>
      <div class="edit col-2 align-self-center">
        <button data-toggle="collapse" data-target="#mail" onclick="handleToggle(this)" id="edit">Edit</button>
      </div>
      <div class="col-12 collapse mt-2" id="mail">
        <form action="">
          <div class="form-group">
            <small><label for="email" class="mb-0">Enter email:</label></small>
            <input type="email" class="form-control mb-2 borer-0" name="email" id="email" autofocus required />
          </div>
          <input type="submit" class="btn btn-primary btn-sm mb-0">
        </form>
      </div>
    </div>
    <div class="row my-2 my-md-2 py-1 py-md-3">
      <div class="col-10">
        <h6 class="my-2">Phone</h6>
        <p>2348156776521</p>
      </div>
      <div class="edit col-2 align-self-center">
        <button data-toggle="collapse" data-target="#phone" onclick="handleToggle(this)" id="edit">Edit</button>
      </div>
      <div class="col-12 collapse mt-2" id="phone">
        <form action="">
          <div class="form-group">
            <small><label for="Tel" class="mb-0">Enter phone number:(2348156776521)</label></small>
            <input type="tel" maxlength="13" minlength="10" class="form-control mb-2 borer-0" name="phone" id="Tel"
              pattern="[1-4]{3}[0-9]{10}" autofocus required />
          </div>
          <input type="submit" class="btn btn-primary btn-sm mb-0">
        </form>
      </div>
    </div>
    <div class="row my-2 my-md-2 py-1 py-md-3">
      <div class="col-10">
        <h6 class="my-2">Password</h6>
        <input type="Password" value="password" readonly />
      </div>
      <div class="edit col-2 align-self-center">
        <button data-toggle="collapse" data-target="#password" onclick="handleToggle(this)" id="edit">Edit</button>
      </div>
      <div class="col-12 collapse mt-2" id="password">
        <form action="">
          <div class="form-group">
            <small><label for="pass" class="mb-0">Enter password:</label></small>
            <input type="password" class="form-control mb-2 borer-0" name="password" id="pass" autofocus required />
          </div>
          <input type="submit" class="btn btn-primary btn-sm mb-0">
        </form>
      </div>
    </div>
    <div class="row my-2 my-md-2 py-1 py-md-3">
      <div class="col-10">
        <h6 class="my-2">School location</h6>
        <p>Abia state</p>
      </div>
      <div class="edit col-2 align-self-center">
        <button data-toggle="collapse" data-target="#loc" onclick="handleToggle(this)" id="edit">Edit</button>
      </div>
      <div class="col-12 collapse mt-2" id="loc">
        <form action="">
          <div class="form-group">
            <small><label for="location" class="mb-0">Enter school location:</label></small>
            <input type="text" class="form-control mb-2 borer-0" name="location" id="location" autofocus required />
          </div>
          <input type="submit" class="btn btn-primary btn-sm mb-0">
        </form>
      </div>
    </div>
  </div>

  <div class="container mt-5 pt-5">
    <div class="text-left mr-5">
      <h2 class="my-2 mb-4">Account type</h2>
      <div class="notification my-2 my-md-2 p-2 py-md-3 pl-md-3 border">
        <h6 class="my-2">Student</h6>
        <p>Save, filter and easily search for hostels</p>
      </div>
    </div>
  </div>

@endsection

@section('script')

  <script>
    function handleToggle(btn) {

      if (btn.id === "edit") {
        btn.innerText = "Cancel";
        btn.id = "Cancel"

      } else {
        btn.innerText = "Edit";
        btn.id = "edit"
      }
    }
  </script>
@endsection
