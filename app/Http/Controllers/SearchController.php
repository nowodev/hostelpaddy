<?php

namespace App\Http\Controllers;

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
        $sortBy = 'id';
        $orderBy = 'DESC';
        $perPage = 10;
        $q = null;

        if ($request->has('orderBy')) {
            $orderBy = $request->query(('orderBy'));
        }
        if ($request->has('sortBy')) {
            $sortBy = $request->query(('sortBy'));
        }
        if ($request->has('perPage')) {
            $perPage = $request->query(('perPage'));
        }
        if ($request->has('q')) {
            $q = $request->query(('q'));
        }

        // using scoped Model
        $hostels = Hostel::search($q)
            ->orderBy($sortBy, $orderBy)
            ->paginate($perPage);

        $location = City::get();
        $properties = Property::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $amenities = Amenity::get();

        return view('frontend.search', compact('hostels', 'location', 'properties', 'utilities', 'rules', 'amenities', 'orderBy', 'sortBy', 'q', 'perPage'));
    }
}
