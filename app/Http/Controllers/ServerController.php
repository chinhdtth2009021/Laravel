<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function save(Request $request)
    {
        $server = new Server();
        $server->fill($request->all());
        $server->save();
        return $server;
    }
    public function display()
    {
        $server = Server::all();
        return $server;
    }
}
