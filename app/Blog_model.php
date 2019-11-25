<?php
namespace App;
use Illuminate\Support\Facades\DB;
class Blog_model
{
	/*
	 * GET
	*/
	
 	public static function register_user($username,$email,$password) {
 		users::register_new($username,$email,$password);
 	}
 	public static function get_user($email){
 		return users::getByEmail($email);
 	}
 	public static function get_posts() {
 		return Posts::orderBy('updated_at','desc')->get();
 	}
 	public static function get_user_cookie($value){
 		return users::getByCookie($value);
 	}
 	public static function get_post_id($id){
 		return Posts::getById($id);
 	}
 	/*
 	 * SET
 	*/
 	public static function set_user_cookie($email,$value){
 		users::set_cookie($email,$value);
 	}
 	public static function new_post($content,$user_id){
 		Posts::addPost($content,$user_id);
 	}
 	public static function update_post($content,$id) {
 		Posts::updatePost($content,$id);
 	}

}