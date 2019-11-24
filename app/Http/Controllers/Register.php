<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    public function register(){
        $data = array(
            'Menu0' => 'Home',
            'href0' => 'blog',
        );
        return view('register_template',$data);
    }

    public function register_action(){
        
    }
}
