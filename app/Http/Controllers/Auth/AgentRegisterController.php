<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;

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
            'email' => 'required|email|max:255|unique:agents,email|unique:students,email|unique:users,email',
            'phone' => 'required|max:20',
            'password' => 'required|confirmed|min:8',
            'image' => 'sometimes|mimes:png,jpg,jpeg',
        ]);

        
        $image = $request->file('image');
        $filename = 'HP_A_' . time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(225, 100)
            ->save(storage_path('app/public/agents/' . $filename));
            // ->save(public_path('storage/agents/' . $filename));

        auth('agent')->login($agent = Agent::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'image' => $filename,
        ]));

        event(new Registered($agent));

        return redirect(RouteServiceProvider::AGENTHOME)
            ->with('success', 'Account Created Successfully');
    }
}
