<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\City;
use App\Models\Hostel;
use App\Models\Property;
use App\Models\Rule;
use App\Models\Utility;
use Illuminate\Http\Request;

class SortController extends Controller
{
    public function sortByPriceHighToLow(Request $request)
    {
        $hostels = Hostel::orderBy('amount', 'DESC')
            ->available()
            ->Paginate(16);

        $location = City::get();
        $properties = Property::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $amenities = Amenity::get();

        return view('frontend.search', compact('hostels', 'location', 'properties', 'utilities', 'rules', 'amenities'));
    }

    public function sortByPriceLowToHigh(Request $request)
    {
        $hostels = Hostel::orderBy('amount', 'ASC')
            ->available()
            ->Paginate(16);

        $location = City::get();
        $properties = Property::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $amenities = Amenity::get();

        return view('frontend.search', compact('hostels', 'location', 'properties', 'utilities', 'rules', 'amenities'));
    }

    public function sortByRecentlyUpdated(Request $request)
    {
        $hostels = Hostel::latest('updated_at')
            ->available()
            ->Paginate(16);

        $location = City::get();
        $properties = Property::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $amenities = Amenity::get();

        return view('frontend.search', compact('hostels', 'location', 'properties', 'utilities', 'rules', 'amenities'));
    }

    public function sortByRecentlyAdded(Request $request)
    {
        $hostels = Hostel::latest()
            ->available()
            ->Paginate(16);

        $location = City::get();
        $properties = Property::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $amenities = Amenity::get();

        return view('frontend.search', compact('hostels', 'location', 'properties', 'utilities', 'rules', 'amenities'));
    }
}
