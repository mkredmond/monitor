<?php

namespace App\Http\Controllers;

use App\Server;

class ServerController extends Controller
{
    public function index()
    {
        $servers = Server::orderBy('env', 'desc')
                          ->orderBy('hostname', 'asc')
                          ->get();

        return view('admin.servers.create', compact('servers'));
    }

    public function create()
    {
        $this->validate(request(), [
          'hostname' => 'required|unique:servers|max:255',
          'env' => 'required|max:4|in:PROD,PPRD,FAID,DEV',
        ]);

        $server = Server::create(request()->all());

        if (!$server) {
            flash('There was an error creating server. Entry was not added.', 'danger');
        } else {
            flash('Server "'.request()->get('hostname').'" was successfully created!', 'success');
        }

        return back();
    }

    public function edit(Server $server)
    {
        return view('admin.servers.edit', compact('server'));
    }

    public function update(Server $server)
    {
        $this->validate(request(), [
        'hostname' => 'required|unique:servers|max:255',
        'env' => 'required|max:4|in:PROD,PPRD,FAID,DEV',
      ]);

        if (!$server->update(request()->all())) {
            flash('Unable to update application.', 'danger');
        } else {
            flash('Application successfully updated!', 'success');
        }

        return back();
    }

    public function remove(Server $server)
    {
        $server->delete();

        return back();
    }
}
