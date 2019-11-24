<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class Blog extends Controller
{

    public function ja() {
        echo "test";
    }
    public function index() {
    	$Post = Posts::all();
    	$data = array(
    		'Menu0' => 'Home',
    	    'Menu1' => 'Login',
    	    'Menu2' => 'Register',
    	    'href0' => 'blog',
    	    'href1' => '',
    	    'href2' => '',
    	    'SubForum' => 'Main',
    	    'Posts' => $Post
    	);
    	return view('index_template', $data);
    }

    public function register(){
        $data = array(
            'Menu0' => 'Home',
            'href0' => 'blog',
        );
        return view('register_template',$data);
    }


    private function register_user($username,$email,$password){
        Users::register_new($username,$email,$password);
    }

}
