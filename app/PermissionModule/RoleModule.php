<?php

namespace App\PermissionModule;

use Illuminate\Database\Eloquent\Model;

class RoleModule extends Model {
	protected $fillable = ['role_id', 'module_ids'];
	public $timestamps = false;
	public static function insertRoleModel($res) {
		$modules = json_encode($res['modules']);
		$role = $res['role'];
		self::create([
			'role_id' => $role,
			'module_ids' => $modules,
		]);
	}
}
