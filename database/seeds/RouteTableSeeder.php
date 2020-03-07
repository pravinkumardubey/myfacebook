<?php

use Illuminate\Database\Seeder;

class RouteTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run() {
		\DB::table('routes')->delete();

		\DB::table('routes')->insert([
			[
				"route_group_id" => 1,
				"route_name" => "ViewTL",
			],
			[
				"route_group_id" => 2,
				"route_name" => "createTL",
			],
			[
				"route_group_id" => 3,
				"route_name" => "updateTL",
			],
			[
				"route_group_id" => 4,
				"route_name" => "ListTL",
			],
			[
				"route_group_id" => 5,
				"route_name" => "editTL",
			],
			[
				"route_group_id" => 6,
				"route_name" => "getAllLLsForTL",
			],
			[
				"route_group_id" => 7,
				"route_name" => "getAllSchoolsForLL",
			],
			[
				"route_group_id" => 8,
				"route_name" => "ViewLL",
			],
			[
				"route_group_id" => 9,
				"route_name" => "createLL",
			],
			[
				"route_group_id" => 10,
				"route_name" => "updateLL",
			],
			[
				"route_group_id" => 11,
				"route_name" => "listLL",
			],
			[
				"route_group_id" => 12,
				"route_name" => "viewSchool",
			],
			[
				"route_group_id" => 13,
				"route_name" => "createSchool",
			],
			[
				"route_group_id" => 14,
				"route_name" => "updateSchool",
			],
			[
				"route_group_id" => 15,
				"route_name" => "listSchool",
			],
			[
				"route_group_id" => 16,
				"route_name" => "deleteSchool",
			],
			[
				"route_group_id" => 17,
				"route_name" => "statusSchool",
			],
			[
				"route_group_id" => 18,
				"route_name" => "uploadCsvFileTeacher",
			],
			[
				"route_group_id" => 19,
				"route_name" => "getAllSchoolTeachers",
			],
			[
				"route_group_id" => 20,
				"route_name" => "getallSchoolTeachers",
			],
			[
				"route_group_id" => 21,
				"route_name" => "viewParent",
			],
			[
				"route_group_id" => 22,
				"route_name" => "createParent",
			],
			[
				"route_group_id" => 23,
				"route_name" => "updateParent",
			],
			[
				"route_group_id" => 24,
				"route_name" => "listParent",
			],
			[
				"route_group_id" => 25,
				"route_name" => "deleteParent",
			],
			[
				"route_group_id" => 26,
				"route_name" => "statusParent",
			],
			[
				"route_group_id" => 27,
				"route_name" => "getAllSchoolStudent",
			],
			[
				"route_group_id" => 28,
				"route_name" => "viewStudent",
			],
			[
				"route_group_id" => 29,
				"route_name" => "createStudent",
			],
			[
				"route_group_id" => 30,
				"route_name" => "updateStudent",
			],
			[
				"route_group_id" => 31,
				"route_name" => "listStudent",
			],
			[
				"route_group_id" => 32,
				"route_name" => "deleteStudent",
			],
			[
				"route_group_id" => 33,
				"route_name" => "uploadCsvFileClass",
			],
			[
				"route_group_id" => 34,
				"route_name" => "schoolReport",
			],
			[
				"route_group_id" => 35,
				"route_name" => "createStaff",
			],
			[
				"route_group_id" => 36,
				"route_name" => "loginPage",
			],
			[
				"route_group_id" => 37,
				"route_name" => "userLogin",
			],
			[
				"route_group_id" => 39,
				"route_name" => "flusharchive",
			],
			[
				"route_group_id" => 40,
				"route_name" => "home",
			],
			[
				"route_group_id" => 41,
				"route_name" => "getParentInfo",
			],
			[
				"route_group_id" => 42,
				"route_name" => "getParentStudentsIndex",
			],
			[
				"route_group_id" => 43,
				"route_name" => "getCountryCode",
			],
			[
				"route_group_id" => 44,
				"route_name" => "updateStaff",
			],
			[
				"route_group_id" => 45,
				"route_name" => "deleteStaff",
			],
			[
				"route_group_id" => 46,
				"route_name" => "getStaffInfo",
			],
			[
				"route_group_id" => 47,
				"route_name" => "listUserStaff",
			],
			[
				"route_group_id" => 48,
				"route_name" => "listUserStaff",
			],
			[
				"route_group_id" => 49,
				"route_name" => "viewStaff",
			],
			[
				"route_group_id" => 50,
				"route_name" => "createStudentView",
			],
			[
				"route_group_id" => 51,
				"route_name" => "getStudentInfo",
			],
			[
				"route_group_id" => 52,
				"route_name" => "bulkActivate",
			],
			[
				"route_group_id" => 53,
				"route_name" => "bulkDeactivate",
			],
			[
				"route_group_id" => 54,
				"route_name" => "archiveUser",
			],
			[
				"route_group_id" => 55,
				"route_name" => "login",
			],
			[
				"route_group_id" => 56,
				"route_name" => "logout",
			],
			[
				"route_group_id" => 57,
				"route_name" => "register",
			],
			[
				"route_group_id" => 58,
				"route_name" => "getAllTLsByCountry",
			],
			[
				"route_group_id" => 59,
				"route_name" => "archiveUser",
			],
			[
				"route_group_id" => 60,
				"route_name" => "ViewCountry",
			],
			[
				"route_group_id" => 61,
				"route_name" => "ListCountry",
			],
			[
				"route_group_id" => 62,
				"route_name" => "getParentStudentsList",
			],
			[
				"route_group_id" => 62,
				"route_name" => "getAllSchoolsForCountry",
			],
			[
				"route_group_id" => 62,
				"route_name" => "getSchoolInfo",
			],

		]);
	}
}
