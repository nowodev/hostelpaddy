<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::Paginate(10, ['*'], 'properties');

        return view('admin.features.property', compact('properties'));
    }

    public function store(Request $request)
    {
        if ($request) {
            $credentials = $request->validate(['name' => 'required|string|unique:properties']);
            Property::create($credentials);

            notify()->preset('feature-added');
            return redirect()->back();
        }

        notify()->preset('general-error');
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
