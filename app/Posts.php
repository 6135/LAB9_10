<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $table = 'microposts';
	protected $primaryKey = 'id';

	public static function selectByUser($id){
		return $this->select('content','id','user_id')->where('user_id',$id)->get();
	}
	public static function get_all(){
		return $this->all();
	}
	public static function addPost($content,$user_id){
		$Post = new Posts;
		$Post->content = $content;
		$Post->user_id = $user_id;
		$Post->save();
	}
	public static function updatePost($content,$id){
		$Post = Posts::where('id',$id)->first();
		$Post->content = $content;
		$Post->save();
	}
	public static function getById($id){
		$Post = Posts::where('id',$id)->first();
		return $Post;
	}
	/**
		get user that owns
	*/
    public function user(){
        return $this->belongsTo('App\Users','user_id','id'); //Matches micropost.user_id to users.id
    }
}
