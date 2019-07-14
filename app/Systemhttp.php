<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Systemhttp extends Model
{
	protected $table = 'systemhttp';
	
	public function server() {
		return $this->belongsTo(Server::class);
	}
	
	
	public function getHostCount($domain,$days=1) {
		$result =DB::select('SELECT SUM(`count`) as hits FROM '. $this->table .  
							' WHERE server_name=? AND ' .
							' monitor_date >= DATE_SUB(CONVERT_TZ(NOW(),"GMT","US/Eastern"),INTERVAL ? DAY) ' .
							' GROUP BY server_name',
				[$domain,$days]
		);
		return($result[0]->hits);
	}
	
	public function getHosts($server_id) {
		$return =DB::select('SELECT DISTINCT server_name FROM '. $this->table .  
							' WHERE server_id=? ORDER BY server_name',
				[$server_id]
		);
		return($return);
	}
}
