<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
		echo 123;
		echo config('app.timezone');
		echo env('APP_KEY');
	}
}
