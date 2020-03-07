<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddUser extends Model {
	protected $fillable = ['username', 'age', 'password'];
	public static function addUser($request) {
		$data = $request->all();
		$bulkInsert = [];
		$usernameArray = $request->input('username');
		$ageArray = $request->input('age');
		$passwordArray = $request->input('password');

		foreach ($usernameArray as $key => $value) {
			$bulkInsert[] = [
				'username' => $value,
				'age' => $ageArray[$key],
				'password' => $passwordArray[$key],
			];
		}
		self::insert($bulkInsert);

	}
	public static function checkUser($email) {
		return self::where('username', $email)->count();
	}
}
