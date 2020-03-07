<?php

use Illuminate\Database\Seeder;

class RouteGroupTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run() {
		\DB::table('route_groups')->delete();

		\DB::table('route_groups')->insert([
			[
				"route_group_label" => "ViewTL",
				"module_id" => 2,
			],
			[
				"route_group_label" => "createTL",
				"module_id" => 2,
			],
			[
				"route_group_label" => "updateTL",
				"module_id" => 2,
			],
			[
				"route_group_label" => "ListTL",
				"module_id" => 2,
			],
			[
				"route_group_label" => "editTL",
				"module_id" => 2,
			],
			[
				"route_group_label" => "getAllLLsForTL",
				"module_id" => 2,
			],
			[
				"route_group_label" => "getAllSchoolsForLL",
				"module_id" => 3,
			],
			[
				"route_group_label" => "ViewLL",
				"module_id" => 3,
			],
			[
				"route_group_label" => "createLL",
				"module_id" => 3,
			],
			[
				"route_group_label" => "updateLL",
				"module_id" => 3,
			],
			[
				"route_group_label" => "viewSchool",
				"module_id" => 4,
			],
			[
				"route_group_label" => "createSchool",
				"module_id" => 4,
			],
			[
				"route_group_label" => "updateSchool",
				"module_id" => 4,
			],
			[
				"route_group_label" => "listSchool",
				"module_id" => 4,
			],
			[
				"route_group_label" => "deleteSchool",
				"module_id" => 4,
			],
			[
				"route_group_label" => "statusSchool",
				"module_id" => 4,
			],
			[
				"route_group_label" => "uploadCsvFileTeacher",
				"module_id" => 5,
			],
			[
				"route_group_label" => "getAllSchoolTeachers",
				"module_id" => 5,
			],
			[
				"route_group_label" => "getallSchoolTeachers",
				"module_id" => 5,
			],
			[
				"route_group_label" => "viewParent",
				"module_id" => 6,
			],
			[
				"route_group_label" => "createParent",
				"module_id" => 6,
			],
			[
				"route_group_label" => "updateParent",
				"module_id" => 6,
			],
			[
				"route_group_label" => "listParent",
				"module_id" => 6,
			],
			[
				"route_group_label" => "deleteParent",
				"module_id" => 6,
			],
			[
				"route_group_label" => "statusParent",
				"module_id" => 6,
			],
			[
				"route_group_label" => "getAllSchoolStudent",
				"module_id" => 7,
			],
			[
				"route_group_label" => "viewStudent",
				"module_id" => 7,
			],
			[
				"route_group_label" => "createStudent",
				"module_id" => 7,
			],
			[
				"route_group_label" => "updateStudent",
				"module_id" => 7,
			],
			[
				"route_group_label" => "listStudent",
				"module_id" => 7,
			],
			[
				"route_group_label" => "deleteStudent",
				"module_id" => 7,
			],
			[
				"route_group_label" => "uploadCsvFileClass",
				"module_id" => 8,
			],
			[
				"route_group_label" => "schoolReport",
				"module_id" => 11,
			],
			[
				"route_group_label" => "createStaff",
				"module_id" => 25,
			],
			[
				"route_group_label" => "loginPage",
				"module_id" => 15,
			],
			[
				"route_group_label" => "userLogin",
				"module_id" => 15,
			],
			[
				"route_group_label" => "flusharchive",
				"module_id" => 15,
			],
			[
				"route_group_label" => "home",
				"module_id" => 15,
			],
			[
				"route_group_label" => "getParentInfo",
				"module_id" => 6,
			],
			[
				"route_group_label" => "getParentStudentsIndex",
				"module_id" => 6,
			],
			[
				"route_group_label" => "getInfo",
				"module_id" => 15,
			],
			[
				"route_group_label" => "getCountryCode",
				"module_id" => 15,
			],
			[
				"route_group_label" => "updateStaff",
				"module_id" => 25,
			],
			[
				"route_group_label" => "deleteStaff",
				"module_id" => 25,
			],
			[
				"route_group_label" => "getStaffInfo",
				"module_id" => 25,
			],
			[
				"route_group_label" => "listUserStaff",
				"module_id" => 25,
			],
			[
				"route_group_label" => "viewStaff",
				"module_id" => 25,
			],
			[
				"route_group_label" => "createStudentView",
				"module_id" => 7,
			],
			[
				"route_group_label" => "getStudentInfo",
				"module_id" => 7,
			],
			[
				"route_group_label" => "bulkActivate",
				"module_id" => 15,
			],
			[
				"route_group_label" => "bulkDeactivate",
				"module_id" => 15,
			],
			[
				"route_group_label" => "archiveUser",
				"module_id" => 15,
			],
			[
				"route_group_label" => "login",
				"module_id" => 15,
			],
			[
				"route_group_label" => "logout",
				"module_id" => 15,
			],
			[
				"route_group_label" => "register",
				"module_id" => 15,
			],
			[
				"route_group_label" => "getAllTLsByCountry",
				"module_id" => 15,
			],
			[
				"route_group_label" => "ViewCountry",
				"module_id" => 15,
			],
			[
				"route_group_label" => "ListCountry",
				"module_id" => 15,
			],
			[
				"route_group_label" => "getParentStudentsList",
				"module_id" => 15,
			],
			[
				"route_group_label" => "getAllSchoolsForCountry",
				"module_id" => 15,
			],
			[
				"route_group_label" => "getSchoolInfo",
				"module_id" => 15,
			],
			[
				"route_group_label" => "listLL",
				"module_id" => 3,
			],

		]);
	}
}
