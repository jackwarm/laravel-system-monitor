<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;
use App\Systemdisks;

class DiskController extends Controller
{
	public function show(Request $request,$id) {
		$where = $this->macroPhageAuthentication($request);
		if ($where) {
			return($where);
		}
		$server = Server::find($id);
		$disks = $server->getDisks();
		$webData = ["server"=>$server,"disks"=>$disks];
        return view('disk',$webData);
	}
}
