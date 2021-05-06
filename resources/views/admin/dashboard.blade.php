<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          <!-- Responsive cards -->
          <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Responsive cards
          </h4>

          @include('partials.admin.stats')

          <!-- Cards with title -->
          <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Cards with title
          </h4>
          <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div class="min-w-0 p-4 bg-blue-900 text-white rounded-lg shadow-xs dark:bg-gray-800">
              <h4 class="mb-4 font-semibold">
                Revenue
              </h4>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                nihil dolorum.
              </p>
            </div>
            <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
              <h4 class="mb-4 font-semibold">
                Colored card
              </h4>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                nihil dolorum.
              </p>
            </div>
          </div>

          <div>
            @include('partials.admin.agent-table')
          </div>
          <div class="mt-8">
            @include('partials.admin.student-table')
          </div>
          <div class="mt-8">
            @include('partials.admin.hostel-table')
          </div>
        </div>

        {!! $chart->container() !!}

      </div>


    {{-- <script src="{{ $chart->cdn() }}"></script> --}}
    <script src="{{ asset('js/apexcharts.js') }}"></script>
    {!! $chart->script() !!}


    </div>
  </div>


</x-app-layout>
