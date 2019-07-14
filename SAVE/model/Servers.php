<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
	public function diskData() {
		return $this->hasMany(Systemdisks::class);
	}	
	
	public function mysqlData() {
		return $this->hasMany(Systemmysql::class);
	}
	
	public function performanceData() {
		return $this->hasMany(Systemperformance::class);
	}
	
	public function httpData() {
		return $this->hasMany(Systemhttp::class);
	}
	
	public function getDisks() {
		return $this->httpData()->get(['*']);
	}
}
