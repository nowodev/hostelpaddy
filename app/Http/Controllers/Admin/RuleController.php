<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rule;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function index()
    {
        $rules = Rule::Paginate(10, ['*'], 'rules');

        return view('admin.features.rules', compact('rules'));
    }

    public function store(Request $request)
    {
        if ($request) {
            $credentials = $request->validate(['name' => 'required|string|unique:rules']);
            Rule::create($credentials);

            notify()->preset('feature-added');
            return redirect()->back();
        }

        notify()->preset('general-error');
        return redirect()->back();
    }

    public function show(Rule $rule)
    {
        //
    }

    public function edit(Rule $rule)
    {
        //
    }

    public function update(Request $request, Rule $rule)
    {
        //
    }

    public function destroy(Rule $rule)
    {
        $rule->delete();

        notify()->preset('feature-deleted');
        return redirect()->back();
    }
}
