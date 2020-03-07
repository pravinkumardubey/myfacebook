<?php

namespace App\PermissionModule;

use Illuminate\Database\Eloquent\Model;

class Module extends Model {
	protected $fillable = ['module_name'];
	public static function insertModule($request) {
		return self::create([
			'module_name' => $request->input('module'),
		]);
	}
}
