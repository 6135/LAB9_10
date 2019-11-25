<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = "users";
	protected $primaryKey = 'id';

  public static function getByEmail($email) {
    return Users::where('email',$email)->get();
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
  
  public static function set_cookie($email,$value){
    $user = Users::where('email',$email)->first();
    $user->remember_digest = $value;
    $user->timestamps = false;
    $user->save();
    $user->timestamps = false;
  }

    public static function getByCookie($value){
      $user = Users::where('remember_digest',$value)->first();
      return $user;
  }
}
