<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_model extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'id';

	public static function get_all(){
		return Users_model::all();
	}

  	public function posts(){
    	return $this->hasMany('app\Posts_model','user_id','id'); //Posts user_id matches id
  	}
}
