<?php
Route::get('/', function () {
	return view('welcome');
});
//=======================================================================
/**
 * The declare route user for registration page
 * @return view
 */
Route::get('user', function () {
	return view('user');
});

/**
 * The declare route login for user sign in
 * @return view
 */

Route::view('login', 'login')->name('login');

/**
 * The declare route logout for user sign out
 * @return login view
 */

Route::get('logout', 'LikeController@logout')->name('logout');

/**
 * The declare route validateLogin for user sign in
 *
 */

Route::post('validateLogin', 'UserController@validateLogin')->name('validateLogin');

/**
 * The declare route dashboard for view dashboard after login user
 *
 */

Route::get('dashboard', 'UserController@dashboard')->name('dashboard')->middleware('route');

/**
 * The declare route deletecategory use for delete data with id $id
 * @param [int] $id
 *
 */

Route::get('deletecategory/{id}', 'CategoryController@deleteRecord');

/**
 * The declare route deleteblob use for delete post with id $id
 * @param [int] $id
 * @return view
 */

Route::get('deleteblob/{id}', 'PostController@deleteBlob');

/**
 * The declare route category use for view category list
 *
 */

Route::get('category', 'CategoryController@index')->name('category')->middleware('route');

/**
 * The declare route addcategory use for add category view
 *
 */

Route::get('addcategory', 'CategoryController@addcategory')->name('addcategory')->middleware('route');

/**
 * The declare route addingcategory use for add category
 *
 */

Route::post('addingcategory', 'CategoryController@addingcategory');

/**
 * The declare route blobs use for view blob list
 *
 */

Route::get('blobs', 'CategoryController@blobs')->name('blobs')->middleware('route');

/**
 * The declare route selecttype use for dyanmic select box
 *
 */

Route::post('/selecttype', 'CategoryController@selecttype');

/**
 * The declare route add-description use for add post
 *
 */

Route::post('add-description', 'PostController@formGroup');

/**
 * The declare route bloblist use for view post list if user valid
 *
 */

Route::get('bloblist', 'PostController@bloblist')->name('bloblist')->middleware('route');

/**
 * The declare route logout use for logout user and return view login
 *
 */

Route::get('logout', 'UserController@logout')->name('logout');

/**
 * The declare route editblob use edit post
 *
 */

Route::get('editblob/{id}', 'PostController@editBlob')->name('editblob');

/**
 * The declare route viewdesc use for view description list
 *
 */

Route::get('viewdesc', 'PostController@viewdesc')->name('viewdesc')->middleware('route');

/**
 * The declare route updatedescription use for update post
 *
 */

Route::post('updatedescription', 'PostController@update')->name('updateDes');

/**
 * The declare route saveComment use for insert comment in database
 *
 */

Route::post('saveComment', 'CommentController@saveComment');

/**
 * The declare route postlike use for like and dislike posts
 *
 */

//Route::get('postlike/{id}/{status}','LikeController@postLike');

Route::get('postlike/{id}/{status}', 'LikeController@performLikeDislike');

/**
 * The declare route saveComment use for insert comment in database
 *
 */

//Route::get('postdislike/{id}','LikeController@postDisLike');
Route::post('user', 'UserController@index');
/**
 * The declare route displaycomment use for display comment
 *
 */

Route::get('displaycomment/{id}', 'CommentController@displayComment');

/**
 * The declare route deletecomment use for delete comment
 *
 */

Route::get('deletecomment/{id}', 'CommentController@deleteComment');

/**
 * The declare route updatecomment use for update comment
 *
 */

Route::post('/updatecomment', 'CommentController@updateMessage');

/**
 * The declare route is use for change language
 *
 */
Route::get('locale/{locale}', 'UserController@languages');
/**
 * The declare route is use for download image
 *
 */

Route::get('/download/{img}', 'PostController@getDownload');
//============================Nwe Project=========================//

Route::get('first', 'PermisssionController@roleIndex');

Route::get('welcome', 'PermisssionController@listRole')->name('welcome');

Route::post('create-roll', 'PermisssionController@createRole')->name('create-roll');

Route::get('module-list', 'PermisssionController@IndexModule');
Route::get('module-view', 'PermisssionController@listModule')->name('module-view');

Route::get('create-module', 'PermisssionController@createModule');

Route::get('role-assign-model', 'PermisssionController@roleAssignModel');

Route::get('save-role-assign-model', 'PermisssionController@saveRoleAssignModel');

Route::get('edit-role/{id}', 'PermisssionController@editRole');

Route::get('edit-module/{id}', 'PermisssionController@editModule');

Route::post('update-role', 'PermisssionController@updateRole')->name('update-role');
Route::post('update-module', 'PermisssionController@updateModule')->name('update-module');

Route::get('post/{id}', 'PraController@getComments');
