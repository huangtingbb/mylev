<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;

class UserController extends Controller
{
    //用户列表
	public function userList(){
		$userModel=new User();
		$user=$userModel->find(1);
		echo "<pre>";
		print_r($user);
	}

	//添加用户
	public function add(){
		$userModel = new User();
		$userModel->username = 'laravel';
		$userModel->email = 'laravel@163.com';
		$userModel->mobile = '1366713154';
		$userModel->save();
	}
}
