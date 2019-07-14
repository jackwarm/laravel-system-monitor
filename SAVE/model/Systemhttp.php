<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Systemhttp extends Model
{
	public function server() {
		return $this->belongsTo(Servers::class);
	}
}
