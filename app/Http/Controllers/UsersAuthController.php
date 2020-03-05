<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreated;
class UsersAuthController extends Controller
{
    public function index(){
    	event(new UserCreated("Email send"));
    }
}
