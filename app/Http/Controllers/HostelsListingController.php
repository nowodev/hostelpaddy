<?php

namespace App\Http\Controllers;

use App\Http\Requests\HostelListingRequest;
use App\Models\Agent;
use App\Models\Amenity;
use App\Models\Hostel;
use App\Models\Property;
use App\Models\Rule;
use App\Models\Utility;
use Illuminate\Support\Facades\Auth;

class HostelsListingController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(Hostel::class, 'hostel');
    }

    public function index()
    {
        // fetch hostels from table
        $hostels = Hostel::where('agent_id', Auth::guard('agent')->user()->id)
            ->orderBy('id', 'ASC')
            ->Paginate(10);
        // dd($hostels);
        return view('agents.hostels.index', compact('hostels'));
    }

    public function create()
    {
        $hostel = new Hostel();
        $amenities = Amenity::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $properties = Property::get();

        return view(
            'agents.hostels.create',
            compact('hostel', 'amenities', 'utilities', 'rules', 'properties')
        );
    }

    public function store(HostelListingRequest $request)
    {
        if (Auth::guard('agent')->check()) {
            $hostel = Auth::guard('agent')->user()->hostels()->create($request->validated());
            $hostel->amenities()->sync($request->amenities);
            $hostel->utilities()->sync($request->amenities);
            $hostel->rules()->sync($request->amenities);
            return redirect()->route('listings.index')
                ->with('success', 'Hostel Added Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'A problem occurred');
        }
    }

    public function show($id)
    {
        $hostel = Hostel::FindOrFail($id);
        return view('agents.hostels.show', compact('hostel'));
    }

    public function edit($id)
    {
        $hostel = Hostel::FindOrFail($id);
        $amenities = Amenity::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $properties = Property::get();

        return view(
            'agents.hostels.edit',
            compact('hostel', 'amenities', 'utilities', 'rules', 'properties')
        );
    }

    public function update(HostelListingRequest $request, Hostel $hostel)
    {
        $hostel->update($request->validated());
        $hostel->amenities()->sync($request->amenities);
        $hostel->utilities()->sync($request->amenities);
        $hostel->rules()->sync($request->amenities);

        return redirect()->route('listings.index')
            ->with('success', 'Hostel Updated Successfully');
    }

    public function destroy(Hostel $hostel)
    {
        //
    }
}
