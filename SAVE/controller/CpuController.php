<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servers;

class CpuController extends Controller
{
	public function show(Request $request,$id) {
		$where = $this->macroPhageAuthentication($request);
		if ($where) {
			return($where);
		}
		$server = Servers::find($id);
		$webData = ["server"=>$server];
        return view('cpu',$webData);
	}
}
