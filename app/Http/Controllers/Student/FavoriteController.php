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

        notify()->preset('favorites');
        return back();
    }
	
	public function removeFavorite($id)
    {
        $user = Student::studentId();
        $hostel = Hostel::findOrFail($id);
        $user->removeFavorite($hostel);
        
        notify()->preset('unfavored');
        return back();
    }
	
//	shared hostels favorite
	
	public function toggleSharedFavorite($id)
    {
        $user = Student::studentId();
        $hostel = SharedHostel::findOrFail($id);
        $user->toggleFavorite($hostel);
        
        notify()->preset('favorites');
        return back();
    }
    
    public function removeSharedFavorite($id)
    {
        $user = Student::studentId();
        $hostel = SharedHostel::findOrFail($id);
        $user->removeFavorite($hostel);
    
        notify()->preset('unfavored');
        return back();
    }

}
