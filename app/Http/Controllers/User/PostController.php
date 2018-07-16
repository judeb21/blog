<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\category;

class PostController extends Controller
{
    public function post(post $post, category $category)
    {
    	$categories = $category::all();
        return view('user/layout/post', compact('post', 'categories'));
    }
    public function getAllPosts()
    {
    	$posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(2);
    }
}
