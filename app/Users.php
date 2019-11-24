<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'id';

	public static function get_all(){
		return $this->all();
	}

  	public function posts(){
    	return $this->hasMany('app\Posts','user_id','id'); //Posts user_id matches id
  	}

  	public static function register_new($username,$email,$password){
  		$user = new Users;
  		$user->name = $username;
  		$user->email = $email;
  		$password = substr(md5($password), 0,32);
  		$user->password_digest = $password;
  		$user->save();
  	}
}
