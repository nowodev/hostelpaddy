<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\HostelRequest;
use App\Models\Amenity;
use App\Models\City;
use App\Models\Hostel;
use App\Models\Period;
use App\Models\Property;
use App\Models\Rule;
use App\Models\State;
use App\Models\Utility;

class HostelController extends Controller
{
    public function index()
    {
        $hostels = Hostel::agent()->get();
        
        return view('agents.listing', compact('hostels'));
    }
    
    public function create(Hostel $hostel)
    {
        $cities = City::get();
        $states = State::get();
        $properties = Property::get();
        $amenities = Amenity::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $periods = Period::get();
        
        return view('agents.hostels.create', compact('hostel', 'cities', 'states', 'properties', 'amenities', 'utilities', 'rules', 'periods'));
    }
    
    public function store(HostelRequest $request)
    {
        // ? Add hostel to table, and populate other tables(hostel_utility, amenity_hostel, hostel_rule) with data
        if (auth('agent')->check()) {
            $hostel = auth('agent')->user()->hostels()->create($request->validated());
//            if ($request->hasFile('image')) {
//                $this->_uploadImage($request, $hostel);
//            }
            
            $hostel->amenities()->sync($request->amenities);
            $hostel->utilities()->sync($request->utilities);
            $hostel->rules()->sync($request->rules);
    
            notify()->preset('hostel-added');
            return redirect()->route('agent.listings.index');
        }
        
        return redirect()->back()
            ->with('error', 'A problem occurred');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(HostelRequest $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}