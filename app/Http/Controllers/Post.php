<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Blog_model;
class Post extends Controller
{
	public function post($blog_id = FALSE) {

		self::checkCookie('rememberMe');
        if(session()->has('id')) {
        	$Name = session()->get('Name');
        	$user_id = session()->get('id');
	        $data = array(
	            'Menu1' => 'Welcome '.$Name.'!',
	            'href1' => '#',
                'Menu2' => 'Blog',
                'href2' => action('Post@post',''),
	            'Verb' => "Write",
	            'Post_id' => '',
	            'Blog' => ''
	        );

            if(($Post = self::get_blog($user_id,$blog_id))!=null && $Post!='new') {
            	$data['Verb']='Edit';
            	$data['Blog']=$Post->content;
            	$data['Post_id']=$blog_id;
            	return view('post.blog_template',$data); //logged in, and owns the post to be edited
            } elseif($Post==null) {
            	return self::errorView("You do not own this post!"); //if user_id != id of the logged user
            } else {
            	return view('post.blog_template',$data);	//not trying to edit, then create new
            }
        }
        return self::errorView("You need to be logged in first!"); //not logged in
	} 

	public function post_action(Request $request, $blog_id = FALSE) {
		if(!(session()->has('id'))) {
			return self::errorView("You need to be logged in first!");
		} else {
			$user_id = session()->get('id');
			$content = $request->content;
			if(!empty($blog_id) && !empty($content)) {
				return self::update_blog($user_id,$blog_id,$content);
			}elseif(empty($blog_id)) {
				return self::new_blog($user_id,$content);
			}
		}
	}

	private function errorView($Error){
		$data = array(
        	'Type' => 'danger',
        	'Message' => "$Error"
        );
        return view('message_template',$data);
	}

	private function checkCookie($name){
		if(Cookie::has($name) == 1) {
            $User = Blog_model::get_user_cookie(Cookie::get('rememberMe'));
            session(['Name' => $User->name]);
            session(['id' => $User->id]);         
        } 
	}

	private function update_blog($user_id,$blog,$content){
        $Post = Blog_model::get_post_id($blog);
        if(!($Post->user_id == $user_id))
        	return self::errorView("You do not own this post!");
        else {
        	Blog_model::update_post($content,$blog);
        	$data = array(
        		'Type' => 'success',
        		'Message' => 'Post updated!'
        	);
        	return view('message_template',$data);
        }
	} 
	private function new_blog($user_id,$content){
		Blog_model::new_post($content,$user_id);
        $data = array(
        	'Type' => 'success',
        	'Message' => 'Post added!'
        );
        return view('message_template',$data);
	}
	private function get_blog($user_id,$blog_id) {
		if(!empty($blog_id)) {
			$Post = Blog_model::get_post_id($blog_id);
            if(!empty($Post) && $Post->user_id == $user_id){
            	return $Post; //if user is owner then return post
            } //if user is not owner the post is NULL, meaning he doesnt not own the post
		} else return 'new'; //no blog id given, make new one
	}
}
