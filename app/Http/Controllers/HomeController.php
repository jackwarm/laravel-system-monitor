<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;

class HomeController extends Controller
{
	public function index(Request $request) {
		$where = $this->macroPhageAuthentication($request);
		if ($where) {
			return($where);
		}
		$servers = Server::all();
		$webData = ["servers"=>$servers];
        return view('home',$webData);
	}
}
