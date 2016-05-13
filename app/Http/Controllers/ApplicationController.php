<?php

namespace App\Http\Controllers;

use App\Application;
use App\Server;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::orderBy('name', 'asc')
                        ->get();

        $servers = Server::orderBy('env', 'desc')
                        ->orderBy('hostname', 'asc')
                        ->get();

        return view('admin.applications.create', compact('applications', 'servers'));
    }

    public function create()
    {
        $this->validate(request(), [
          'server_id' => 'required|exists:servers,id',
          'name' => 'required',
          'uri' => 'required',
          'protocol' => 'required|in:http,https',
          'port' => 'required|integer',
        ]);

        $server = Server::find(request()->get('server_id'));
        if (!$server->addApplication(new Application(request()->all()))) {
            flash('Unable to add the application to '.$server->hostname.'.', 'danger');
        } else {
            flash('Application saved to '.$server->hostname.'!', 'success');
        }

        return back();
    }

    public function remove(Application $application)
    {
        # code...
    }
}
