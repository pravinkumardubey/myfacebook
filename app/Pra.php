<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pra extends Model {
	public static function myPra() {
		return $this->hasMany('App\Vin');
	}
}
