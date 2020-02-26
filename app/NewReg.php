<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewReg extends Model
{
    protected $table='new_regs';
    protected $fillable=[
    	'name','dob','email','file','contact'
    ];
   public static function insertData($request,$profilePicName){
     return	Self::create(['name'=>$request->name,'dob'=>$request->dob,'email'=>$request->email,'file'=>$profilePicName,'contact'=>$request->mobile]);
    }
}
