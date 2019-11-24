<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRegisterNew;
use App\Users;
class Register extends Controller
{
    public function index(){
        $data = array(
            'Menu0' => 'Home',
            'href0' => 'blog',
            'Email' => '',
            'Username' => ''
        );
        return view('register.register_template',$data);
    }

    public function register_action(StoreRegisterNew $request){
    	Users::register_action($request->Username,$request->Email,$request->Password);
    	return redirect('/message_template')
    }

}
