<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts_model extends Model
{
	protected $table = 'microposts';
	protected $primaryKey = 'id';

	public static function selectByUser($id){
		return Posts_model::select('content','id','user_id')->where('user_id',$id)->get();
	}
	public static function get_all(){
		return Posts_model::all();
	}/**
		get user that owns
	*/
    public function user(){

        return $this->belongsTo('App\Users_model','user_id','id'); //Machers micropost.user_id to users.id
    }
}
