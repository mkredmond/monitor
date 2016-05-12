<?php

namespace App\Http\Controllers;

class SearchController extends Controller
{
    public function index()
    {
        $searchQuery = request()->get('search');
        // dd($searchQuery);

        return view('search', compact('searchQuery'));
    }
}
