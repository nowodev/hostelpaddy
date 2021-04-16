<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgentRegisterController extends Controller
{
    public function create()
    {
        return view('auth.agent_signup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // ? check each table, email column, to avoid duplicate
            'email' => 'required|string|email|max:255|unique:agents,email|unique:students,email|unique:users,email',
            'phone' => 'required|max:20',
            'location' => 'required|string|max:255',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::guard('agent')->login($agent = Agent::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'image' => 'something.jpg',
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($agent));

        return redirect(RouteServiceProvider::AGENTHOME);
    }
}
