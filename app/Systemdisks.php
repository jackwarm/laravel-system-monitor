<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Systemdisks extends Model
{
	protected $table = 'systemdisks';
	
	public function server() {
		return $this->belongsTo(Server::class);
	}
}
