<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    public function index()
    {
        $amenities = Amenity::Paginate(5, ['*'], 'amenities');

        return view('admin.features.amenity', compact('amenities'));
    }

    public function store(Request $request)
    {
        $credentials = $request->validate(['name' => 'required|string']);
        Amenity::create($credentials);

        notify()->preset('feature-added');
        return redirect()->back();
    }

    public function show(Amenity $amenity)
    {
        //
    }

    public function edit(Amenity $amenity)
    {
        //
    }

    public function update(Request $request, Amenity $amenity)
    {
        //
    }

    public function destroy(Amenity $amenity)
    {
        $amenity->delete();

        notify()->preset('feature-deleted');
        return redirect()->back();
    }
}
