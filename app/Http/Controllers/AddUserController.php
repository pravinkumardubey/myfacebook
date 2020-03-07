<?php

namespace App\Http\Controllers;
use App\AddUser;
use App\Http\Requests\AddUserRequest;

class AddUserController extends Controller {
	/**
	 * The declare index function for use view load
	 * @return view
	 */
	function index() {
		return view('add_user');
	}

	/**
	 * The declare create function use for registration
	 *
	 *
	 */
	function create(AddUserRequest $request) {
		AddUser::addUser($request);
	}
	/**
	 * The declare checkEmail function use email exist or not
	 *
	 *
	 */
	function checkEmail($email) {
		$res = AddUser::checkUser($email);
		print($res);
	}
}
