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

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = null;
        
        if ($request->has('q')) {
            $q = $request->query(('q'));
        }
        
        $hostels = Hostel::where('hostel_name', 'LIKE', "%{$q}%")
            ->orderBy('id', 'DESC')
            ->available()
            ->Paginate(16);
        
        $location = City::get();
        $properties = Property::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $amenities = Amenity::get();
        
        return view('frontend.search', compact('hostels', 'location', 'properties', 'utilities', 'rules', 'amenities', 'q'));
    }
}
