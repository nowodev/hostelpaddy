<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::Paginate(5, ['*'], 'properties');

        return view('admin.features.property', compact('properties'));
    }

    public function store(Request $request)
    {
        $credentials = $request->validate(['name' => 'required|string']);
        Property::create($credentials);

        notify()->preset('feature-added');
        return redirect()->back();
    }

    public function show(Property $property)
    {
        //
    }

    public function edit(Property $property)
    {
        //
    }

    public function update(Request $request, Property $property)
    {
        //
    }

    public function destroy(Property $property)
    {
        $property->delete();

        notify()->preset('feature-deleted');
        return redirect()->back();
    }
}
