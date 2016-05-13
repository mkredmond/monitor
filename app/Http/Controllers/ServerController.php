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
          'env' => 'required|max:4',
        ]);

        $server = Server::create(request()->all());

        if (!$server) {
            flash('There was an error creating server. Entry was not added.', 'danger');
        } else {
            flash('Server "'.request()->get('hostname').'" was successfully created!', 'success');
        }

        return redirect('admin/servers');
    }

    public function remove(Server $server)
    {
        # code...
    }
}
