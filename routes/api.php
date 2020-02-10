<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("allusers", 'Api\v1\UsersController@userslist');
Route::get("posts", 'Api\v1\PostsController@postslist');
Route::get("newpost", 'Api\v1\PostsController@addpost');
Route::post("editpost/{id}", 'Api\v1\PostsController@editpost');
Route::delete("post/{id}", 'Api\v1\PostsController@deletepost');
Route::get("categories", 'Api\v1\CategoriesController@categorieslist');
Route::get("profiles", 'Api\v1\ProfilesController@profileslist');
