<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Systemperformance extends Model
{
	public function server() {
		return $this->belongsTo(Servers::class);
	}
}
