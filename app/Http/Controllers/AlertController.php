<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;

class AlertController extends Controller
{
	public function show(Request $request,$id) {
		$where = $this->macroPhageAuthentication($request);
		if ($where) {
			return($where);
		}
		$server = Server::find($id);
		$webData = ["server"=>$server];
        return view('alert',$webData);
	}
}
