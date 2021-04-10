<?php

namespace App\Http\Controllers\AgentAuth;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('agentauth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:agents',
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
