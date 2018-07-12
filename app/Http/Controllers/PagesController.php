<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Location;



class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function trips(){
        $locations= Location::all();
        return view('pages.trips', compact('locations'));
    }

    public function blog(){
        $posts = Post::paginate(4);

        return view('pages.blog', compact('posts'));
    }
    
    public function singlePost(Post $post){
    
        return view('singlePost', compact('post'));
     }
}
