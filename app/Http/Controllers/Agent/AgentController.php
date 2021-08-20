<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Amenity;
use App\Models\City;
use App\Models\Hostel;
use App\Models\Property;
use App\Models\Rule;
use App\Models\Utility;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $hostels = Hostel::orderBy('id', 'DESC')
            ->available()
            ->Paginate(16);
        
        $location = City::get();
        $properties = Property::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $amenities = Amenity::get();
        
        return view('agents.index', compact('hostels', 'location', 'properties', 'utilities', 'rules', 'amenities'));
    }
    
    public function settings_account()
    {
        return view('agents.settings.account');
    }

    public function settings_profile()
    {
        $agent = auth('agent')->user();

        return view('agents.settings.profile', compact('agent'));
    }

    public function chat()
    {
        return view('agents.chat');
    }

    public function notification()
    {
        return view('agents.notification');
    }
}