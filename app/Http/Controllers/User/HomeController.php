<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\post;
use App\Model\User\category;

class HomeController extends Controller
{
    public function index(){
        return view('user/blogs');
    }
    public function read(){
        $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(2);// use all();
        return view('user/layout/Read-more',compact('posts'));
    }
    public function thoughts(){
        return view('user/layout/life');
    }
    public function category(category $category){
     $posts = $category->posts();
     return view('user/layout/Read-more',compact('posts'));
    }
}
