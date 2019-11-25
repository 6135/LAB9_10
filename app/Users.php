<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'id';

	public static function get_all(){
		return Users::all();
	}
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
  
  public static function set_cookie($email,$value,$id){
    $User = Users::where('email',$email)->first();
    $User->remember_digest = $value;
    $User->timestamps = false;
    $User->save();
    $User->timestamps = false;
  }

    public static function getByCookie($value){
      $User = Users::where('remember_digest',$value)->first();
      return $User;
  }
}
