<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts_model;

class Blog extends Controller
{

    public function index() {
    	$Post = Posts_model::all();
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

}
