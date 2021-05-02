<?php

namespace App\Http\Controllers\Agent;

use App\Models\Hostel;
use App\Http\Controllers\Controller;
use App\Http\Requests\HostelRequest;
use App\Models\Amenity;
use App\Models\City;
use App\Models\Property;
use App\Models\Rule;
use App\Models\State;
use App\Models\Utility;
use Intervention\Image\ImageManagerStatic as Image;

class HostelController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Hostel::class, 'hostel');
    }

    public function index()
    {
        // ? fetch hostels from table
        $hostels = Hostel::where('agent_id', auth('agent')->id())
            ->orderBy('id', 'ASC')
            ->Paginate(10);
        return view('agents.hostels.index', compact('hostels'));
    }

    public function create()
    {
        // ? get Models, to insert them as arrays
        $hostel = new Hostel();
        $amenities = Amenity::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $properties = Property::get();
        $states = State::get();
        $cities = City::get();

        return view('agents.hostels.create',
            compact('hostel', 'amenities', 'utilities', 'rules', 'properties', 'states', 'cities')
        );
    }

    public function store(HostelRequest $request)
    {
        // ? Add hostel to table, and populate other tables(hostel_utility, amenity_hostel, hostel_rule) with data
        if (auth('agent')->check()) {
            $hostel = auth('agent')->user()->hostels()->create($request->validated());
            if ($request->hasFile('image')) {
                $this->_uploadImage($request, $hostel);
            }

            $hostel->amenities()->sync($request->amenities);
            $hostel->utilities()->sync($request->utilities);
            $hostel->rules()->sync($request->rules);
            return redirect()->route('hostels.index')
                ->with('success', 'Hostel Added Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'A problem occurred');
        }
    }

    public function show(Hostel $hostel)
    {
        return view('agents.hostels.show', compact('hostel'));
    }

    public function edit(Hostel $hostel)
    {
        $amenities = Amenity::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $properties = Property::get();
        $states = State::get();
        $cities = City::get();

        return view('agents.hostels.edit',
            compact('hostel', 'amenities', 'utilities', 'rules', 'properties', 'states', 'cities')
        );
    }

    public function update(HostelRequest $request, Hostel $hostel)
    {
        $hostel->update($request->validated());
        if ($request->hasFile('image')) {
            $this->_uploadImage($request, $hostel);
        }

        $hostel->amenities()->sync($request->amenities);
        $hostel->utilities()->sync($request->utilities);
        $hostel->rules()->sync($request->rules);

        return redirect()->route('hostels.index')
            ->with('success', 'Hostel Updated Successfully');
    }

    public function destroy(Hostel $hostel)
    {
        $hostel->amenities()->detach($hostel->amenities);
        $hostel->utilities()->detach($hostel->utilities);
        $hostel->rules()->detach($hostel->rules);
        $hostel->delete();
        return redirect()->route('hostels.index')
            ->with('success', 'Hostel Deleted Successfully');
    }

    private function _uploadImage($request, $hostel)
    {
        $image = $request->file('image');
        $filename = 'HP_H_' . time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(225, 100)
            ->save(storage_path('app/public/hostels/' . $filename));
        $hostel->image = $filename;
        $hostel->save();
    }
}
