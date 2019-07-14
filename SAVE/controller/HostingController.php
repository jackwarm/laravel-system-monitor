<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servers;

class HostingController extends Controller
{
    
	public function show(Request $request,$id) {
		$where = $this->macroPhageAuthentication($request);
		if ($where) {
			return($where);
		}
		$server = Servers::find($id);
		$webData = ["server"=>$server];
        return view('hosting',$webData);
	}
}
