<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;
use App\Systemhttp;

class HostingController extends Controller
{
    
	private $dayArray = ["Day"=>1, "Week"=>7, "30 Days"=>30];
	
	public function show(Request $request,$id) {
		$where = $this->macroPhageAuthentication($request);
		if ($where) {
			return($where);
		}
		$server = Server::find($id);
		$hostObj = new Systemhttp();
		$domains = $hostObj->getHosts($id);	
		$hosts = array();
		foreach ($domains as $host) {
			$row = array();
			$row["domain"] = $host->server_name;
			foreach ($this->dayArray as $key=>$days) {
				$row[$key] = number_format($hostObj->getHostCount($host->server_name,$days));			
			}
			$hosts[] = $row;
		}
		$webData = ["server"=>$server,"hosts"=>$hosts];
        return view('hosting',$webData);
	}
}
 