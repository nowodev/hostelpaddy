<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Utility;
use Illuminate\Http\Request;

class UtilityController extends Controller
{
    public function index()
    {
        $utilities = Utility::Paginate(5, ['*'], 'utilities');

        return view('admin.features.utility', compact('utilities'));
    }

    public function store(Request $request)
    {
        $credentials = $request->validate(['name' => 'required|string']);
        Utility::create($credentials);

        notify()->preset('feature-added');
        return redirect()->back();
    }

    public function show(Utility $utility)
    {
        //
    }

    public function edit(Utility $utility)
    {
        //
    }

    public function update(Request $request, Utility $utility)
    {
        //
    }

    public function destroy(Utility $utility)
    {
        $utility->delete();

        notify()->preset('feature-deleted');
        return redirect()->back();
    }
}
