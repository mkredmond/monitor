<?php

namespace App\Http\Controllers;

use App\Application;
use DB;

class SearchController extends Controller
{
    public function index()
    {
        $searchQuery = request()->get('search');

        // $applications = Application::where('name', 'like', '%'.$searchQuery.'%')
        //                 ->orderBy('name')
        //                 ->get();

        $servers = DB::table('servers')
                          ->join('applications', 'servers.id', '=', 'applications.server_id')
                          ->where('applications.name', 'like', '%'.$searchQuery.'%')
                          ->orWhere('applications.uri', 'like', '%'.$searchQuery.'%')
                          ->orWhere('applications.port', 'like', '%'.$searchQuery.'%')
                          ->orWhere('env', 'like', '%'.$searchQuery.'%')
                          ->get();

        return view('search', compact('searchQuery', 'servers'));
    }
}
