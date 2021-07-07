<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\City;
use App\Models\Favorite;
use App\Models\Hostel;
use App\Models\Property;
use Illuminate\Http\Request;

class ListedHostelsController extends Controller
{
    public function index()
    {
        $hostels = Hostel::orderBy('id', 'DESC')
            ->available()
            ->Paginate(16);

        $location = City::get();
        $property = Property::get();

        return view('frontend.hostels', compact('hostels', 'location', 'property'));
    }

    public function show(Hostel $hostel)
    {
        $agent = Agent::find($hostel->agent_id);
        $otherHostels = Hostel::where('id', '!=', $hostel->id)->get();

        return view('frontend.info', compact('hostel', 'agent', 'otherHostels'));
    }
}