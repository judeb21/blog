<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\category;

class HomeController extends Controller
{
    public function index(){
        $posts = post::where('status',1)->orderBy('created_at', 'DESC')->paginate(6);
        return view('user/blogs', compact('posts'));
    }
    public function read(){
        $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(6);// use all();
        return view('user/layout/category',compact('posts'));
    }
    public function thoughts(){
        return view('user/layout/life');
    }
    public function category(category $category){
     $posts = $category->posts();
     $categories = $category::all();
     //return view('user/blogs', compact('posts'));
     return view('user/layout/category',compact('categories', 'posts'));
    }
}
