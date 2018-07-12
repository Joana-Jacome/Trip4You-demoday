<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;



class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function trips(){
        return view('pages.trips');
    }

    public function blog(){
        $posts = Post::paginate(4);

        return view('pages.blog', compact('posts'));
    }
    
    public function singlePost(Post $post){
    
        return view('singlePost', compact('post'));
     }
}
