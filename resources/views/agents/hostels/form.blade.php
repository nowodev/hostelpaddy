@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $errors)
      <li class="text-red-600">{{ $errors }}</li>
    @endforeach
  </ul>
@endif

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Hostel Information</h3>
        <p class="mt-1 text-sm text-gray-600">
          In order to list your hostel, we need you to provide some information on the property.
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6">
              <label for="hostel_name" class="block text-sm font-medium text-gray-700">Hostel name</label>
              <input type="text" name="hostel_name" id="hostel_name" autocomplete="hostel_name"
                value="{{ old('hostel_name', $hostel->hostel_name) }}"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6">
              <label for="address" class="block text-sm font-medium text-gray-700">Street address</label>
              <input type="text" name="address" id="address" autocomplete="address"
                value="{{ old('address', $hostel->address) }}"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-4 sm:col-span-3 lg:col-span-3">
              <label for="state" class="block text-sm font-medium text-gray-700">State</label>
              <select id="state" name="state" autocomplete="state"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Select One</option>
                @foreach ($states as $state)
                    <option value="{{ $state->name }}" {{ $state->name == old('state', $hostel->state) ? 'selected' : '' }}>{{ $state->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="col-span-4 sm:col-span-3 lg:col-span-3">
              <label for="city" class="block text-sm font-medium text-gray-700">City</label>
              <select id="city" name="city" autocomplete="city"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Select One</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->name }}" {{ $city->name == old('city', $hostel->city) ? 'selected' : '' }}>{{ $city->name }}</option>
                @endforeach
              </select>
            </div>
            <fieldset class="col-span-3 pb-5">
              <div>
                <legend class="text-base font-medium text-gray-900">Property Type</legend>
              </div>
              <div class="mt-4 space-y-4">
                @foreach ($properties as $property)
                  <div class="mb-3 flex items-center justify-between">
                    <div class="flex items-center">
                      <input id="property" name="property" type="radio" value="{{ $property->name }}"
                        {{ $property->name == old('property', $hostel->property) ? 'checked' : '' }}
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                      <label for="property" class="ml-3 block text-sm font-medium text-gray-700">
                        {{ $property->name }}
                      </label>
                    </div>
                  </div>
                @endforeach
              </div>
            </fieldset>

            <div class="col-span-4 sm:col-span-3 lg:col-span-3">
              <label for="roomNum" class="block text-sm font-medium text-gray-700">Number of Rooms</label>
              <select id="roomNum" name="roomNum" autocomplete="roomNum"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Select One</option>
                <option value="1" {{ '1' == old('roomNum', $hostel->roomNum) ? 'selected' : '' }}>1</option>
                <option value="2" {{ '2' == old('roomNum', $hostel->roomNum) ? 'selected' : '' }}>2</option>
                <option value="3" {{ '3' == old('roomNum', $hostel->roomNum) ? 'selected' : '' }}>3</option>
              </select>
            </div>

            <div class="col-span-4 sm:col-span-3 lg:col-span-3">
              <label for="amount" class="block text-sm font-medium text-gray-700">Hostel Fee</label>
              <input type="number" name="amount" id="amount" autocomplete="amount" value="{{ old('amount', $hostel->amount) }}"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-4 sm:col-span-3 lg:col-span-3">
              <label for="period" class="block text-sm font-medium text-gray-700">Rent Period</label>
              <select id="period" name="period" autocomplete="period"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Select One</option>
                <option value="yearly" {{ 'yearly' == old('period', $hostel->period) ? 'selected' : '' }}>Yearly</option>
                <option value="quaterly" {{ 'quaterly' == old('period', $hostel->period) ? 'selected' : '' }}>Quaterly</option>
                <option value="monthly" {{ 'monthly' == old('period', $hostel->period) ? 'selected' : '' }}>Monthly</option>
              </select>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Specifications</h3>
        <p class="mt-1 text-sm text-gray-600">
          ......
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

          <div class="grid grid-cols-6 gap-6">
            <fieldset class="col-span-3">
              <legend class="text-base font-medium text-gray-900">Amenities</legend>
              <div class="mt-4 space-y-4">
                @foreach ($amenities as $amenity)
                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="amenities[]" name="amenities[]" type="checkbox"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" value="{{ $amenity->id }}" {{ in_array($amenity->id, old('amenities', $hostel->amenities->pluck('id')->toArray())) ? 'checked' : '' }}>
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="amenities[]" class="font-medium text-gray-700">{{ $amenity->name }}</label>
                    </div>
                  </div>
                @endforeach
              </div>
            </fieldset>

            <fieldset class="col-span-3">
              <legend class="text-base font-medium text-gray-900">Utilities</legend>
              <div class="mt-4 space-y-4">
                @foreach ($utilities as $utility)
                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="utilities[]" name="utilities[]" type="checkbox"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" value="{{ $utility->id }}" {{ in_array($utility->id, old('utilities', $hostel->utilities->pluck('id')->toArray())) ? 'checked' : '' }}>
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="utilities[]" class="font-medium text-gray-700">{{ $utility->name }}</label>
                    </div>
                  </div>
                @endforeach
              </div>
            </fieldset>

            <fieldset class="col-span-3">
              <legend class="text-base font-medium text-gray-900">Rules</legend>
              <div class="mt-4 space-y-4">
                @foreach ($rules as $rule)
                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="rules[]" name="rules[]" type="checkbox"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" value="{{ $rule->id }}" {{ in_array($rule->id, old('rules', $hostel->rules->pluck('id')->toArray())) ? 'checked' : '' }}>
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="rules[]" class="font-medium text-gray-700">{{ $rule->name }}</label>
                    </div>
                  </div>
                @endforeach
              </div>
            </fieldset>

            <div class="col-span-4 sm:col-span-3 lg:col-span-3">
              <label for="tenantType" class="block text-sm font-medium text-gray-700">Preferred Tenants</label>
              <input type="text" name="tenantType" id="tenantType" autocomplete="tenantType" value="{{ old('tenantType', $hostel->tenantType) }}"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>


<div class="md:grid md:grid-cols-3 md:gap-6">
  <div class="md:col-span-1">
    <div class="px-4 sm:px-0">
      <h3 class="text-lg font-medium leading-6 text-gray-900">Finish</h3>
      <p class="mt-1 text-sm text-gray-600">
        Upload Images of the hostel for proper display.
      </p>
    </div>
  </div>
  <div class="mt-5 md:mt-0 md:col-span-2">
    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
        <div>
          <label class="block text-sm font-medium text-gray-700">
            Cover photo
          </label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                aria-hidden="true">
                <path
                  d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-gray-600">
                <label for="image"
                  class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span>Upload a file</span>
                  <input id="image" name="image" type="file" class="sr-only">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs text-gray-500">
                PNG, JPG, GIF up to 10MB
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
