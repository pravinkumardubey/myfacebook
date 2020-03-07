<?php

namespace App\Http\Controllers;
use App\Post;

class PraController extends Controller {

	public function getComments($id) {
		$post = Post::find($id);
		foreach ($post->comments as $comment) {
			echo $comment->comment;
		}
	}
}