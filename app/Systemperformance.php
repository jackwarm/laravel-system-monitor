<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Systemperformance extends Model
{
	protected $table = 'systemperformance';
	
	public function server() {
		return $this->belongsTo(Server::class);
	}
	
	public function getCPUaverages($server_id,$hours=1) {
		$return =DB::select('select avg(load_1) as L1, avg(load_5) as L5, avg(load_15) as L15, ' .
				'avg(cpu_user) as cpu_user, avg(cpu_system) as cpu_system' .
				' from ' . 	$this->table . 
				' where server_id=? AND created_at >= DATE_SUB(CONVERT_TZ(NOW(),"GMT","US/Eastern"),INTERVAL ? HOUR)',
				[$server_id,$hours]
		);
		return($return[0]);
	}
}