<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
		
    //表名
	protected $table = 'user';
	
	//模型默认属性值
	protected $attributes=[
		'group_id' => 0
	];
}
