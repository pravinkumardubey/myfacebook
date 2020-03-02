<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteModel extends Model
{
    protected $table='route_lists';
    protected $guarded=['route_name'];
    public static function insertRoute($url,$routeName)
    {
    	Self::updateOrInsert([
            'route_url'=>$routeName
        ]);
    }
}