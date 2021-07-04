@extends('layouts.agents.app')
@section('title', 'Agent - Archive')

@section('content')
  <div class="p-10 flex flex-col">

    <div class="mb-3 flex items-center justify-between bg-white py-1 px-1">
      <div class="flex-1 min-w-0">
        <h2 class="text-4xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
          Archive
        </h2>
      </div>
    </div>

    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  S/N
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Date
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Type
                </th>
                <th scope="col" class="py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Price
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($hostels as $hostel)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    {{ $loop->iteration }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-20 w-20">
                        <img src="{{ $hostel->thumbnail }}" alt="Hostel Image" class="h-20 w-20 rounded-full">
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-bold text-gray-900">
                          {{ $hostel->hostel_name }}
                        </div>
                        <div class="text-sm text-gray-500">
                          {{ $hostel->state }}, {{ $hostel->city }}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span
                      class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      {{ $hostel->created_at }}
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $hostel->property }} with {{ $hostel->roomNum }}
                      {{ $hostel->roomNum < 2 ? 'room' : 'rooms' }}
                    </div>
                    <div class="text-sm text-gray-500">
                      {{ $hostel->availability }}
                    </div>
                  </td>
                  <td class="py-4 whitespace-nowrap text-sm text-gray-700">
                    N{{ $hostel->amount }} {{ $hostel->period }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <form action="{{ route('agent.hostel.restore', [$hostel]) }}" method="POST" class="inline-flex">
                      @csrf
                      @method('PUT')

                      <button class="text-indigo-600 hover:text-indigo-900 mr-5">Restore</button>
                    </form>
                    <form action="{{ route('agent.hostel.delete', [$hostel]) }}" method="POST" class="inline-flex">
                      @csrf
                      @method('DELETE')

                      <button class="text-red-600 hover:text-red-900">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
              <!-- More people... -->
            </tbody>
          </table>
          <div
            class="d-flex justify-content-end relative items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
            {{ $hostels->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
