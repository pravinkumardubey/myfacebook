<?php

namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers;
use App\Http\Requests\Permission\ModuleRequest;
use App\Http\Requests\Permission\RoleRequest;
use App\PermissionModule\Module;
use App\PermissionModule\Role;
use App\PermissionModule\RoleModule;
use Illuminate\Http\Request;

class PermisssionController extends Controller {
	public function roleIndex() {
		/**
		 * This function will load role view
		 */
		return redirect()->route('welcome');
	}
	public function createRole(RoleRequest $request) {
		/**
		 * this function will create load
		 */
		Role::insertRole($request);
		return redirect()->to('first');
	}
	public function listRole() {
		/**
		 * this function will create load
		 */
		$res = Role::selectRoleList();
		return view('new.welcome', ['role' => $res]);

	}
	public function getinfoRole() {
		/**
		 * this function will create load
		 */

	}
	public function IndexModule() {
		/**
		 * This function will load role index
		 */
		return redirect()->to('module-view');
	}
	public function createModule(ModuleRequest $request) {
		/**
		 * this function will create load
		 */
		Module::insertModule($request);
		return redirect()->back();
	}
	public function listModule() {
		/**
		 * this function will create load
		 */
		$modules = Module::get();
		return view('new.module', ['modules' => $modules]);
	}
	public function getinfoModule() {
		/**
		 * this function will create load
		 */

	}
	/**
	 * this function will view role assign module
	 * @return view
	 */
	public function roleAssignModel() {
		$roleList = Role::get();
		$moduleList = Module::get();
		return view('new.role_assign_model', ['roleList' => $roleList, 'moduleList' => $moduleList]);
	}
	/**
	 * this function will create role assign module
	 *
	 */
	public function saveRoleAssignModel(Request $request) {
		RoleModule::insertRoleModel($request);
		return redirect()->back();
	}
	/**
	 * this function will display role edit page
	 * @return view
	 */
	public function editRole($id) {
		$res = Role::where('id', $id)->first();
		return view('new.edit-role', ['res' => $res]);
	}
	/**
	 * this function will update role
	 */
	public function updateRole(Request $request) {
		Role::where('id', $request->input('id'))->update(['role' => $request->input('role')]);
		return redirect()->to('first');

	}
	/**
	 * this function will edit module
	 */
	public function editModule($id) {
		$res = Module::where('id', $id)->first();
		return view('new.edit-module', ['res' => $res]);
	}
	/**
	 * this function will update module
	 */
	public function updateModule(Request $request) {
		Module::where('id', $request->input('id'))->update(['module_name' => $request->input('module')]);
		return redirect()->to('module-view');
	}
}
