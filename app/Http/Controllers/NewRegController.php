<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewRegRequest;
use App\NewReg;
class NewRegController extends Controller
{
    function index(){
    	$res = NewReg::orderByRaw('id DESC')->get();
    	return view('new.welcome',['data'=>$res]);
    }
    function store(NewRegRequest $request){
        //print_r($_POST);die;
    	$file = $request->file('file');
        $profilePicName = $file->getClientOriginalName();
        $file->move(public_path('/uploads'),$profilePicName);
    	return NewReg::insertData($request,$profilePicName);
    }

    public function getData()
    {
        $res = NewReg::orderByRaw('id DESC')->get();
        return response()->json(['data'=>$res]);
       
    }
    function deleteData($id){
        NewReg::find($id)->delete();
    }
}
