<?php

namespace App\Http\Controllers;

use App\Models\Hostel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        $sortBy = 'id';
        $orderBy = 'DESC';
        $perPage = 10;
        $q = null;

        if ($request->has('orderBy')) $orderBy = $request->query(('orderBy'));
        if ($request->has('sortBy')) $sortBy = $request->query(('sortBy'));
        if ($request->has('perPage')) $perPage = $request->query(('perPage'));
        if ($request->has('q')) $q = $request->query(('q'));

        // using scoped Model 
        $hostels = Hostel::search($q)
            ->orderBy($sortBy, $orderBy)
            ->paginate($perPage);

        return view('webpages.search',
            compact('hostels', 'orderBy', 'sortBy', 'q', 'perPage'));
    }
}
