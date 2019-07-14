<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Systemmysql extends Model
{
	protected $table = 'systemmysql';
	
	public function server() {
		return $this->belongsTo(Server::class);
	}
}
