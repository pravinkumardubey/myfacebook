<?php

namespace App\PermissionModule;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {
	protected $fillable = ['role'];
	public $timestamps = false;
	public function GetAssignModules() {
		return $this->hasMany('App\PermissionModule\RoleModule', 'role_id', 'id');
	}
	public static function selectRoleList() {
		return self::all();
	}
	public static function insertRole($request) {
		self::create([
			'role' => $request->input('role'),
		]);
	}

}
