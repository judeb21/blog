<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\User\post;
use App\Model\User\category;
use App\Http\Controllers\Controller;
use Auth;

class PostController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view('admin.post.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('posts.create')) {
            $categories = category::all();
            return view('admin.post.post', compact('categories'));
        }
        return redirect(route('admin.home'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);
        if($request->hasFile('image')){
            $imageName = $request->image->store('public');
        }

        $post = new post;
        $post -> title = $request -> title;
        $post -> subtitle = $request -> subtitle;
        $post -> body = $request -> body;
        $post -> slug = $request -> slug;
        $post -> image = $imageName;
        $post -> status = $request -> status;
        $post -> save();
        $post -> categories() -> sync($request -> categories );

        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::with('categories')->where('id', $id)->first();
        $categories = category::all();

        return view('admin.post.edit', compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);
        if($request->hasFile('image')){
            $imageName = $request->image->store('public');
        }

        $post = post::find($id);
        $post -> title = $request -> title;
        $post -> subtitle = $request -> subtitle;
        $post -> body = $request -> body;
        $post -> slug = $request -> slug;
        $post -> image = $imageName;
        $post -> status = $request -> status;
        $post -> categories() -> sync($request -> categories );
        $post -> save();

        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }
}