<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRegisterNew;
use App\Blog_model;
use Illuminate\Support\Facades\Cookie;
class Register extends Controller
{
    public function index(){
        $data = array (
        'Menu1' => 'Login',
        'href1' => 'login'
        );
        if(Cookie::has('rememberMe') == 1) {
            $User = blog_model::get_user_cookie(Cookie::get('rememberMe'));
            session(['Name' => $User->name]);
            session(['id' => $User->id]);         
        }         
        if(session()->has('id')) {
            $data = array(
            'Type' => 'danger',
            'Message' => "You're already logged in!"
            );
            return view('/message_template',$data);             
        }        
        return view('register.register_template',$data);
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
