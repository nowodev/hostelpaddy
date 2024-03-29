<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\SharedHostelRequest;
use App\Models\Amenity;
use App\Models\City;
use App\Models\Property;
use App\Models\Rule;
use App\Models\SharedHostel;
use App\Models\Student;
use App\Models\Utility;
use Illuminate\Http\Request;

class SharedHostelController extends Controller
{
    public function index()
    {
        $sharedHostel = SharedHostel::with('amenities', 'utilities', 'student')
            ->get();
        
        $user = Student::studentId();
        $favoriteSharedHostels = $user->favorite(SharedHostel::class);
        $location = City::get();
        $properties = Property::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $amenities = Amenity::get();
        
        return view('students.hostel_mate', compact('sharedHostel', 'favoriteSharedHostels', 'location', 'properties', 'utilities', 'rules', 'amenities'));
    }
    
    public function create()
    {
        $amenities = Amenity::get();
        $utilities = Utility::get();
    
        return view('students.share-hostels.create', compact('amenities', 'utilities'));
    }
    
    public function store(SharedHostelRequest $request)
    {
        // ? Add hostel to table, and populate other tables(hostel_utility, amenity_hostel, hostel_rule) with data
        $auth = auth('student')->user();
    
        if (auth('student')->check()) {
            $sharedHostel = $auth->sharedHostels()->create($request->validated());
            // if ($request->hasFile('image')) {
            //     $this->_uploadImage($request, $hostel);
            // }
        
            $sharedHostel->amenities()->sync($request->amenity);
            $sharedHostel->utilities()->sync($request->utility);
        
            notify()->preset('hostel-added');
            return redirect()->route('student.hostel-mate.index');
        } else {
            notify()->preset('general-error');
            return redirect()->back();
        }
    }
    
    public function show(SharedHostel $hostel)
    {
        //
    }
    
    public function edit(SharedHostel $hostel)
    {
        //
    }
    
    public function update(Request $request, SharedHostel $hostel)
    {
        //
    }
    
    public function destroy(SharedHostel $hostel)
    {
        //
    }
}