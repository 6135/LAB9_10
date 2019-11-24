<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRegisterNew;
use App\Blog_model;
class Register extends Controller
{
    public function index(){
        return view('register.register_template');
    }

    public function register_action(StoreRegisterNew $request){
    	Blog_model::register_user($request->Username,$request->Email,$request->Password);
    	$data = array(
    	'Type' => 'success',
    	'Message' => 'Success: New user registered'
    	);
    	return view('/message_template',$data);
    }

}
