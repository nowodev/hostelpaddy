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
use Illuminate\Http\Request;

class HostelController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Hostel::class, 'hostel');
    }
    
    public function index()
    {
        $hostels = Hostel::agent()->where('available', 1)->get();
        
        return view('agents.listing', compact('hostels'));
    }
    
    public function create(Hostel $hostel)
    {
//        $cities = City::get();
        $states = State::get();
        $properties = Property::get();
        $amenities = Amenity::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $periods = Period::get();

        return view(
            'agents.hostels.create',
            compact('hostel', 'states', 'properties', 'amenities', 'utilities', 'rules', 'periods')
        );
    }
    
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id", $request->state_id)->get(["name", "id"]);
        return response()->json($data);
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
            return redirect()->route('agent.hostels.index');
        }
        
        return redirect()->back()
            ->with('error', 'A problem occurred');
    }
    
    public function show($id)
    {
    
    }
    
    public function edit(Hostel $hostel)
    {
        $amenities = Amenity::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $properties = Property::get();
        $states = State::get();
        $cities = City::get();
        $periods = Period::get();
        
        return view(
            'agents.hostels.edit',
            compact('hostel', 'amenities', 'utilities', 'rules', 'properties', 'states', 'cities', 'periods')
        );
    }
    
    public function update(HostelRequest $request, Hostel $hostel)
    {
        $hostel->update($request->validated());
//        if ($request->hasFile('image')) {
//            $this->_uploadImage($request, $hostel);
//        }
        
        $hostel->amenities()->sync($request->amenities);
        $hostel->utilities()->sync($request->utilities);
        $hostel->rules()->sync($request->rules);
    
    
        notify()->preset('hostel-updated');
        return redirect()->route('agent.hostels.index');
    }
    
    public function destroy(Hostel $hostel)
    {
        $hostel->delete();
        notify()->preset('hostel-deleted');
        return redirect()->route('agent.hostels.index');
    }
}