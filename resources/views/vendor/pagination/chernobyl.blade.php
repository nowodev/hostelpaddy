@if ($paginator->hasPages())
<div class="d-flex justify-content-end relative items-center px-4 border border-purple-300 rounded-md text-gray-700 bg-white hover:text-gray-500">
  <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
    <div class="flex justify-between flex-1 sm:hidden">
      @if ($paginator->onFirstPage())
        <span
          class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
          {!! __('pagination.previous') !!}
        </span>
      @else
        <a href="{{ $paginator->previousPageUrl() }}"
          class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
          {!! __('pagination.previous') !!}
        </a>
      @endif

      @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}"
          class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
          {!! __('pagination.next') !!}
        </a>
      @else
        <span
          class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
          {!! __('pagination.next') !!}
        </span>
      @endif
    </div>

    <div class="hidden text-xs sm:flex-1 sm:flex sm:items-center sm:justify-between font-semibold uppercase">
      <span class="flex items-center col-span-3">
        {{-- Showing 21-30 of 100 --}}
        <p class="items-center col-span-3 leading-5">
          {!! __('Showing') !!}
          <span class="font-bold">{{ $paginator->firstItem() }}</span>
          {!! __('to') !!}
          <span class="font-bold">{{ $paginator->lastItem() }}</span>
          {!! __('of') !!}
          <span class="font-bold">{{ $paginator->total() }}</span>
          {!! __('results') !!}
        </p>
      </span>
      <span class="col-span-2"></span>
      <!-- Pagination -->
      <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
        <nav aria-label="Table navigation">
          <ul class="inline-flex items-center">
            <li>
              {{-- Previous Page Link --}}
              @if ($paginator->onFirstPage())
                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                  <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                    aria-label="Previous">
                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                      <path
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                  </button>
                </span>
              @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                  class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                  aria-label="{{ __('pagination.previous') }}">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      clip-rule="evenodd" />
                  </svg>
                </a>
              @endif
            </li>
            <li>
              {{-- Pagination Elements --}}
              @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                  <span class="px-3 py-1">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                  @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                      <button
                        class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                        {{ $page }}
                      </button>
                    @else
                      <a href="{{ $url }}"
                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                        {{ $page }}
                      </a>
                    @endif
                  @endforeach
                @endif
              @endforeach
            </li>
            <li>
              {{-- Next Page Link --}}
              @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                  class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                  aria-label="{{ __('pagination.next') }}">
                  <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                    <path
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd" fill-rule="evenodd"></path>
                  </svg>
                </a>
              @else
                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                  <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                    aria-hidden="true">
                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                      <path
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                  </button>
                </span>
              @endif
            </li>
          </ul>
        </nav>
      </span>
    </div>
  </nav>
</div>
@endif