<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Blog_model;
use Illuminate\Support\Facades\Cookie;
class Blog extends Controller
{
    public function index() {
        $Post = Blog_model::get_posts();
        if(Cookie::has('rememberMe') == 1) {
            $User = blog_model::get_user_cookie(Cookie::get('rememberMe'));
            session(['Name' => $User->name]);
            session(['id' => $User->id]);         
        } 
        if(session()->has('id')) {
            $Name = session()->get('Name');
            $data = array(
                'Menu1' => 'Welcome '.$Name.'!',
                'Menu2' => 'Logout',
                'Menu3' => 'Blog',
                'href1' => '#',
                'href2' => action('Login@logout'),
                'href3' => action('Post@post',''),
                'SubForum' => 'Main',
                'Posts' => $Post,
                'id' => session()->get('id'),
                'Name' => $Name
            );
            return view('index_template', $data);            
        }        
    	$data = array(
    	    'Menu1' => 'Login',
    	    'Menu2' => 'Register',
    	    'href1' => action('Login@index'),
    	    'href2' => action('Register@index'),
    	    'SubForum' => 'Main',
    	    'Posts' => $Post
    	);
    	return view('index_template', $data);
    }
}
