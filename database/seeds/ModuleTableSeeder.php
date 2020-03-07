<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ModuleTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run() {
		\DB::table('modules')->delete();

		\DB::table('modules')->insert(array(
			0 => array(
				"module_slug" => Str::slug('CountryModule'),
				'module_name' => 'CountryModule',
			),
			1 => array(
				"module_slug" => Str::slug('TLModule'),
				'module_name' => 'TLModule',
			),
			2 => array(
				"module_slug" => Str::slug('LLModule'),
				'module_name' => 'LLModule',
			),
			3 => array(
				"module_slug" => Str::slug('SchoolModule'),
				'module_name' => 'SchoolModule',
			),
			4 => array(
				"module_slug" => Str::slug('TeacherModule'),
				'module_name' => 'TeacherModule',
			),
			5 => array(
				"module_slug" => Str::slug('ParentModule'),
				'module_name' => 'ParentModule',
			),
			6 => array(
				"module_slug" => Str::slug('StudentModule'),
				'module_name' => 'StudentModule',
			),
			7 => array(
				"module_slug" => Str::slug('ClassModule'),
				'module_name' => 'ClassModule',
			),
			8 => array(
				"module_slug" => Str::slug('AttendanceModule'),
				'module_name' => 'AttendanceModule',
			),
			9 => array(
				"module_slug" => Str::slug('PermissionModule'),
				'module_name' => 'PermissionModule',
			),
			10 => array(
				"module_slug" => Str::slug('SchoolReportModule'),
				'module_name' => 'SchoolReportModule',
			),
			11 => array(
				"module_slug" => Str::slug('ClassReportModule'),
				'module_name' => 'ClassReportModule',
			),
			12 => array(
				"module_slug" => Str::slug('LessonReportModule'),
				'module_name' => 'LessonReportModule',
			),
			13 => array(
				"module_slug" => Str::slug('TeacherReportModule'),
				'module_name' => 'TeacherReportModule',
			),
			14 => array(
				"module_slug" => Str::slug('DefaultModule'),
				'module_name' => 'DefaultModule',
			),
			15 => array(
				"module_slug" => Str::slug('TaggedKids'),
				'module_name' => 'TaggedKids',
			),
			16 => array(
				"module_slug" => Str::slug('ResourceModule'),
				'module_name' => 'ResourceModule',
			),
			17 => array(
				"module_slug" => Str::slug('LLChatModule'),
				'module_name' => 'LLChatModule',
			),
			18 => array(
				"module_slug" => Str::slug('TeacherChatModule'),
				'module_name' => 'TeacherChatModule',
			),
			19 => array(
				"module_slug" => Str::slug('ParentChatModule'),
				'module_name' => 'ParentChatModule',
			),
			20 => array(
				"module_slug" => Str::slug('SchoolChatModule'),
				'module_name' => 'SchoolChatModule',
			),
			21 => array(
				"module_slug" => Str::slug('Feedback'),
				'module_name' => 'Feedback',
			),
			22 => array(
				"module_slug" => Str::slug('FAQ'),
				'module_name' => 'FAQ',
			),
			23 => array(
				"module_slug" => Str::slug('SandboxPlay'),
				'module_name' => 'SandboxPlay',
			),
			24 => array(
				"module_slug" => Str::slug('Staff Module'),
				'module_name' => 'Staff Module',
			),
			25 => array(
				"module_slug" => Str::slug('StudentReportModule'),
				'module_name' => 'StudentReportModule',
			),
		));
	}
}
