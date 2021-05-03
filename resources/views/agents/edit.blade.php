@extends('layouts.agents.app')
@section('title', 'Agent - Edit Profile')

@section('content')
  <div class="flex min-h-screen bg-white">

    <div class="w-1/2 bg-cover md:block hidden"
      style="background-image:  url('{{ asset('main/house-img/Rectangle 147 (1).png') }}');">
    </div>

    <div class="md:w-1/2 max-w-lg mx-auto my-24 px-4 py-5 shadow-none">
        
        <div class="text-left p-0 font-sans">
            
          <h1 class=" text-gray-800 text-3xl font-medium">Update your profile</h1>
          <h3 class="p-1 text-gray-700">Changed your mail or phone number ? Feel free to update.</h3>
        </div>
        <ul>
            @if ($errors->any())
          @foreach ($errors->all() as $errors)
            <li class="text-red-600">{{ $errors }}</li>
          @endforeach
        </ul>
      @endif
      <form action="{{ route('agent.update', [$agent]) }}" method="POST" class="p-0">
        @csrf
        @method('PUT')

        <div class="mt-5">
          <input type="text" name="name"
            class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent "
            placeholder="Full Name" value="{{ old('name', $agent->name) }}">
        </div>
        <div class="mt-5">
          <input type="email" name="email"
            class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent "
            placeholder="Email" value="{{ old('email', $agent->email) }}">
        </div>
        <div class="mt-5">
          <input type="number" name="phone"
            class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent  "
            placeholder="Phone Number" value="{{ old('phone', $agent->phone) }}">
        </div>

        <div class="mt-10">
          <button type="submit"
            class="py-3 bg-blue-900 text-white w-full rounded hover:bg-red-600">
            Update Profile
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection