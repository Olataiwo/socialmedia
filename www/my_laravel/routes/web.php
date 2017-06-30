<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::group(['middleware'=>['web']], function(){
	Route::get('/', function () {
    return view('welcome');
});

	Route::get('/', function () {
    return view('welcome');
})->name('home');


	Route::post('/signup', [
		'uses'=>'userController@postSignUp',
		'as'=>'signup'
	]);

	Route::post('/signin', [
		'uses'=>'userController@postSignIn',
		'as'=>'signin'
	]);

	Route::get('/logout',[
		'uses'=>'userController@getLogout',
		'as'=>'Logout'
		]);

	Route::get('/dashboard', [
		'uses'=>'PostController@getDashBoard',
		'as'=>'dashboard',
		'middleware'=>'authenticated'
		
	]);

	Route::post('/createpost', [
		'uses'=>'PostController@postCreatePost',
		'as'=>'post.create',
		'middleware'=>'authenticated'

	]);

	Route::get('/deletepost/{post_id}',[
		'uses'=>'PostController@getDeletePost',
		'as'=>'post.delete',
		'middleware'=>'authenticated'
		]);

	Route::post('/edit', function(\Illuminate\Http\Request $request){
		return response()->json(['message'=>$request['body']]);
	})->name('edit');


});




