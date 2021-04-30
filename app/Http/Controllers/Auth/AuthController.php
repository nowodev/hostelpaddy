<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validate Fields before Logging In
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        // Log in based on type of user
        $credentials = $request->only('email', 'password');

        // if admin
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::ADMINHOME)
                ->with('success', 'You\'re now logged in.');
        } else if (auth('student')->attempt($credentials)) {
            // if student
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::STUDENTHOME)
                ->with('success', 'You\'re now logged in.' );
        } else if (auth('agent')->attempt($credentials)) {
            // if agent
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::AGENTHOME)
                ->with('success', 'You\'re now logged in.' );
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        // specific user logout
        if (Auth::logout()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        } else if (auth('student')->logout()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        } else if (auth('agent')->logout()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return redirect(route('onboard.login'));
    }
}
