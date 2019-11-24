<?php
namespace App;
use Illuminate\Support\Facades\DB;
class Blog_model
{

	public static function get_posts() {
 		return Posts::orderBy('updated_at','desc')->get();
 	}
 	public static function register_user($username,$email,$password) {
 		Users::register_new($username,$email,$password);
 	}
 	public static function get_user($email){
 		return Users::getByEmail($email);
 	}
 	public static function get_user_cookie($value){
 		return Users::getByCookie($value);
 	}
 	public static function set_user_cookie($email,$value){
 		Users::set_cookie($email,$value);
 	}
}