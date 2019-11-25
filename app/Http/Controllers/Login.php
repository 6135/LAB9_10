<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreLogin;
use App\Blog_model;
use Illuminate\Support\Facades\Cookie;
class Login extends Controller
{

    public function index()
    {
        if(Cookie::has('rememberMe') == 1) {
            $User = blog_model::get_user_cookie(Cookie::get('rememberMe'));
            session(['Name' => $User->name]);
            session(['id' => $User->id]);         
        } 
        if(!(session()->has('id'))) {
	    	$data = array(
	    	'Menu1' => 'Register',
	    	'href1' => 'register'
	    	);
	        return view('login.login_template',$data);
	    } else {
        	$data = array(
        	'Type' => 'danger',
        	'Message' => "You're already logged in!"
        	);
        	return view('/message_template',$data);
        }  	
    }

    public function login_action(StoreLogin $request){
        //
    	//$User = Blog_model::get_user($request->Email);
    	$Password = substr(md5($request->Password), 0, 32);

    	if($Password != $User[0]->password_digest ){
    		return redirect('login')->withErrors('Login failed');
    	}
        
    	session()->regenerate();
    	session(['Name' => $User[0]->name]);
    	session(['id' => $User[0]->id]);
        $data = array(
            'Type' => 'success',
            'Message' => 'Welcome back!'
        );
        if($request->rememberMe==true) {
            $value = substr(md5(time()),0,32);
            Blog_model::set_user_cookie($request->Email,$value);
            Cookie::queue('rememberMe',$value, ((3600 * 24 * 30)));
        }
        return view('/message_template',$data);
    	
    }
    public function logout()
    {
        session()->flush();
        Cookie::queue('rememberMe','',-1);
    	$data = array(
    	'Type' => 'success',
    	'Message' => "You've successfully logged out, see you soon!"
    	);
    	return view('/message_template',$data);        
    }
}