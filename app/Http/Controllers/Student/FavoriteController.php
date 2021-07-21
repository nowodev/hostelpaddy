<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use App\Models\SharedHostel;
use App\Models\Student;

class FavoriteController extends Controller
{
//	Main hostels favorite
	public function toggleFavorite($id)
	{
        $user = Student::studentId();
        $hostel = Hostel::findOrFail($id);
        $user->toggleFavorite($hostel);

//        notify()->success('Welcome to Laravel Notify ⚡️', 'My custom title');
//        connectify('success', 'Connection Found', 'Success Message Here');
//        drakify('success');
//        smilify('success', 'You are successfully reconnected');
//        emotify('success', 'You are awesome, your data was successfully created');
        notify()->preset('user-updated');
        return back();
//		return back()->with('success', 'Hostel added to favorites');
    }
	
	public function removeFavorite($id)
    {
        $user = Student::studentId();
        $hostel = Hostel::findOrFail($id);
        $user->removeFavorite($hostel);

//        notify()->success('Removed ⚡️');
//        drakify('error');
        notify()->preset('user-deleted');
        
        
        return back();
//        return back()->with('success', 'Hostel removed from favorites');
    }
	
//	shared hostels favorite
	
	public function toggleSharedFavorite($id)
	{
		$user = Student::studentId();
		$hostel = SharedHostel::findOrFail($id);
		$user->toggleFavorite($hostel);
		
		return back()->with('success', 'Shared hostel added to favorites');
	}
    
    public function removeSharedFavorite($id)
    {
        $user = Student::studentId();
        $hostel = SharedHostel::findOrFail($id);
        $user->removeFavorite($hostel);
        
        return back()->with('success', 'Shared hostel removed from favorites');
    }

}
