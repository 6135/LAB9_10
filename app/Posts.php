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
	}/**
		get user that owns
	*/
    public function user(){

        return $this->belongsTo('App\Users','user_id','id'); //Machers micropost.user_id to users.id
    }
}
