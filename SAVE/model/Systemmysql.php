<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Systemmysql extends Model
{
	public function server() {
		return $this->belongsTo(Servers::class);
	}
}
