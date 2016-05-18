<?php

namespace App\Http\Controllers;

use App\Server;

class ViewController extends Controller
{
    public function index()
    {
        $servers = Server::with('applications')->get();

        return view('admin.show', compact('servers'));
    }
}
