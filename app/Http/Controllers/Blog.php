<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Blog_model;
class Blog extends Controller
{
    public function index() {
    	$Post = Blog_model::get_posts();
    	$data = array(
    	    'Menu1' => 'Login',
    	    'Menu2' => 'Register',
    	    'href1' => 'login',
    	    'href2' => 'register',
    	    'SubForum' => 'Main',
    	    'Posts' => $Post
    	);
    	return view('index_template', $data);
    }
}
