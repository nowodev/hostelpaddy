<?php

namespace App\Http\Controllers;

use App\Http\Requests\HostelListingRequest;
use App\Models\Amenity;
use App\Models\Hostel;
use App\Models\Rule;
use App\Models\Utility;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class HostelsListingController extends Controller
{
    public function __construct()
    {
        //  ! page unauthorised probably because the Hostel Model is returning null
        // $this->authorizeResource(Hostel::class, 'hostel');
    }

    public function index()
    {
        // ? fetch hostels from table
        $hostels = Hostel::where('agent_id', Auth::guard('agent')->id())
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
        $properties = DB::select('SELECT * FROM properties');

        return view(
            'agents.hostels.create',
            compact('hostel', 'amenities', 'utilities', 'rules', 'properties')
        );
    }

    public function store(HostelListingRequest $request)
    {
        // ? Add hostel to table, and populate other tables(hostel_utility, amenity_hostel, hostel_rule) with data
        if (Auth::guard('agent')->check()) {
            $hostel = Auth::guard('agent')->user()->hostels()->create($request->validated());
            if ($request->hasFile('image')) {
                $this->_uploadImage($request, $hostel);
            }

            $hostel->amenities()->sync($request->amenities);
            $hostel->utilities()->sync($request->utilities);
            $hostel->rules()->sync($request->rules);
            return redirect()->route('listings.index')
                ->with('success', 'Hostel Added Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'A problem occurred');
        }
    }

    //  ! error. code below not working and i'm guessing it should'
    // public function show(Hostel $hostel)
    public function show($id)
    {
        $hostel = Hostel::with(['amenities', 'utilities', 'rules'])
            ->where('id', $id)->first();
        return view('agents.hostels.show', compact('hostel'));
    }

    //  ! error. code below not working and i'm guessing it should'
    //  public function edit(Hostel $hostel)
    public function edit($id)
    {
        $hostel = Hostel::FindOrFail($id);
        $amenities = Amenity::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $properties = DB::select('SELECT * FROM properties');

        return view(
            'agents.hostels.edit',
            compact('hostel', 'amenities', 'utilities', 'rules', 'properties')
        );
    }

    public function update(HostelListingRequest $request, $id)
    {
        $hostel = Hostel::findOrFail($id);
        $hostel->update($request->validated());
        if ($request->hasFile('image')) {
            $this->_uploadImage($request, $hostel);
        }

        $hostel->amenities()->sync($request->amenities);
        $hostel->utilities()->sync($request->utilities);
        $hostel->rules()->sync($request->rules);

        return redirect()->route('listings.index')
            ->with('success', 'Hostel Updated Successfully');
    }

    public function destroy($id)
    {
        $hostel = Hostel::findOrFail($id);
        $hostel->amenities()->detach($hostel->amenities);
        $hostel->utilities()->detach($hostel->utilities);
        $hostel->rules()->detach($hostel->rules);
        $hostel->delete();
        return redirect()->route('listings.index')
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
