<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Amenity;
use App\Models\City;
use App\Models\Favorite;
use App\Models\Hostel;
use App\Models\Property;
use App\Models\Rule;
use App\Models\Utility;
use Illuminate\Http\Request;
use Jorenvh\Share\Share;

class ListedHostelsController extends Controller
{
    public function index()
    {
        $hostels = Hostel::available()->Paginate(16);

        $location = City::get();
        $properties = Property::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $amenities = Amenity::get();

        return view('frontend.hostels', compact('hostels', 'location', 'properties', 'utilities', 'rules', 'amenities'));
    }

    public function show(Hostel $hostel)
    {
        $hostel->with('images', 'state', 'city');
        $agent = Agent::find($hostel->agent_id);
        $otherHostels = Hostel::where('id', '!=', $hostel->id)->with('state', 'city')->get();
        $shareComponent = \Share::currentPage()
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp();

        return view('frontend.info', compact('hostel', 'agent', 'otherHostels', 'shareComponent'));
    }
}