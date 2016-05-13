<?php

namespace App\Http\Controllers;

use App\Application;

class SearchController extends Controller
{
    public function index()
    {
        $searchQuery = request()->get('search');

        $applications = Application::where('name', 'like', '%' . $searchQuery . '%')
                        ->orderBy('name')
                        ->get();

        // dd($searchQuery, $applications);
        return view('search', compact('searchQuery', 'applications'));
    }
}
