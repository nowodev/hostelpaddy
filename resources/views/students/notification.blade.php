@extends('layouts.students.app')

@section('styles')
  {{-- <link type="text/css" href="{{ asset('main/css/styles.css') }}" rel="stylesheet" /> --}}
  <link type="text/css" href="{{ asset('main/css/student/notify.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Student - Notification')

@section('content')
<div class="container Banner">
			<h1 class="display1">Notification</h1>
		</div>


		<div class="container notify mb-5 pb-5">
			<div class="">
				<h1 class="text-primary description">Notification settings</h1>
			</div>


			<!-- <div class="container"> -->
				<div class="notifications mx-2 mx-md-5">
					<div class="notification d-flex px-md-5 py-2 py-md-3 bg-white my-3">
						<li class="note mr-auto text-bold text-info">New hostel listed</li> 
						<time datetime="2021-06-19 03:11" class="my-auto text-secondary text-bold">2mins ago</time>
					</div>
					<div class="notification d-flex px-md-5 py-2 py-md-3 bg-white my-3">
						<li class="note mr-auto text-bold">New hostel listed</li> 
						<time datetime="2021-06-19 03:11" class="my-auto text-secondary text-bold">2mins ago</time>
					</div>
					<div class="notification d-flex px-md-5 py-2 py-md-3 bg-white my-3">
						<li class="note mr-auto text-bold">New hostel listed</li> 
						<time datetime="2021-06-19 03:11" class="my-auto text-secondary text-bold">2mins ago</time>
					</div>
					<div class="notification d-flex px-md-5 py-2 py-md-3 bg-white my-3">
						<li class="note mr-auto text-bold">New hostel listed</li> 
						<time datetime="2021-06-19 03:11" class="my-auto text-secondary text-bold">2mins ago</time>
					</div>
					<div class="notification d-flex px-md-5 py-2 py-md-3 bg-white my-3">
						<li class="note mr-auto text-bold">New hostel listed</li> 
						<time datetime="2021-06-19 03:11" class="my-auto text-secondary text-bold">2mins ago</time>
					</div>
					<div class="notification d-flex px-md-5 py-2 py-md-3 bg-white my-3">
						<li class="note mr-auto text-bold">New hostel listed</li> 
						<time datetime="2021-06-19 03:11" class="my-auto text-secondary text-bold">2mins ago</time>
					</div>
				</div>
			<!-- </div> -->
		</div>
@endsection