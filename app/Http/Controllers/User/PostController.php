<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\post;

class PostController extends Controller
{
    public function post(post $slug)
    {
        return view('user/layout/post', compact('slug'));
    }
    public function getAllPosts()
    {
    	$posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(2);
    }
}
