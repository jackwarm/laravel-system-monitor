<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servers;
use App\Systemdisks;

class DiskController extends Controller
{
	public function show(Request $request,$id) {
		$where = $this->macroPhageAuthentication($request);
		if ($where) {
			return($where);
		}
		$server = Servers::find($id);
		$thisServer  = new Servers();
		$disks = $thisServer->getDisks();
		$webData = ["server"=>$server,"disks"=>$disks];
        return view('disk',$webData);
	}
}
