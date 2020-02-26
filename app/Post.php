<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $fillable=['category_id','title','description','file','liked','dislike','comment'];

    public static function addDescription($request,$category_id,$profilePicName){
    	$query = [
    	'category_id'=> $category_id,
    	'title'=>$request->title,
		'description'=>$request->description,
        'file'=>$profilePicName,
        'liked'=>'0',
        'dislike'=>'0',
        'comment'=>'0'
    ];
    return Self::create($query);
    }

    public static function getTotalLikeCount($postId)
    {
        $query = Self::where(['id'=>$postId])->first();
        if ($query) {
            return $query->liked;
        }
    }

     public static function getTotalDisLikeCount($postId)
    {
        $query = Self::where(['id'=>$postId])->first();
        if ($query) {
            return $query->dislike;
        }
    }

    public static function updateNewLikeDislikeCount($postId,$newLikeCount,$newDislikeCount)
    {
        $data = ['liked'=>$newLikeCount,'dislike'=>$newDislikeCount];

        $query = Self::where(['id'=>$postId])->update($data);
        return $query;
    }

    
}
