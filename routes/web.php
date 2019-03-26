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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
//返回视图
Route::view('/','welcome');

Route::get('/test','TestController@test');

Route::get('/users','UserController@userList');

Route::get('/user/add','UserController@add');

Route::fallback(function(){
	echo 404,'找不到该页面';
});

//模型视图隐式绑定
Route::get('/user/{user}',function(App\Http\Models\User $user){
	//echo 123;
	//echo "<pre>";
	//print_r($user->username);
	//return view('user/index',['user'=>$user]);
	return view('user/index',compact('user'));
});
