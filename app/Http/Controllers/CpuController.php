<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;
use App\Systemperformance;

class CpuController extends Controller
{
	private $hourArray = ["1 Hour"=>1, "12 Hours"=>12, "1 Day"=>24, "7 Days"=>(7*24), "14 Days"=>(14*24), "30 Days"=>(30*24)];
	
	public function show(Request $request,$id) {
		$where = $this->macroPhageAuthentication($request);
		if ($where) {
			return($where);
		}
		$server = Server::find($id);
		$cpuObj = new Systemperformance();
		$cpu = array();
		foreach ($this->hourArray as $key=>$hour) {
			$data = (Array) $cpuObj->getCPUaverages($id,$hour);
			foreach($data as $i=>$value) {
				$data[$i] = round($value,3);
			}
			$cpu[$key] = $data;			
		}
		
		$webData = ["server"=>$server,"cpu"=>$cpu];
        return view('cpu',$webData);
	}
}
