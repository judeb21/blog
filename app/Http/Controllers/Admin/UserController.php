<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\admin\admin;
use App\Model\admin\role;
use App\Http\Controllers\Controller;
use Auth;
use Image;

class UserController extends Controller
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
        $users = admin::all();
        return view('admin.user.List', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = role::all();
        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:191|unique:admins',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string|max:15',
            'Adminimage' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        if($request->hasFile('Adminimage')){
            $Adminimage = $request->Adminimage->store('public');
        }

        $request['password'] = bcrypt($request->password);
        $user= admin::create($request->all());
        $user-> roles()->sync($request->role);
        return redirect(route('user.index'));
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
        $user = admin::find($id);
        $roles = role::all();
        return view('admin.user.edit', compact('user','roles'));
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
         $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:191',
            'phone' => 'required|string|max:15',
        ]);

         $request->status? : $request['status']=0; //if status is checked, do nothin else push status to 0
         $user = admin::where('id',$id)->update($request->except('_token','_method','role'));
         admin::find($id)->roles()->sync($request->role);
         return redirect(route('user.index'))->with('message','User Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        admin::where('id',$id)->delete();
        return redirect()->back()->with('message','User Succesfully Deleted');
    }
    public function profile()
    {
        return view('admin.layout.profile', array('user'=>Auth::user()));
    }

    public function updateAdminImage(Request $request)
    {
        //andle admin request to admin imae
         if ($request->hasFile('Adminimage')) {
          $Adminimage = $request->file('Adminimage');
         //$img = Image::make($request->file('A')->getRealPath());
          $filename = time() .'.' . $Adminimage ->getClientOriginalExtension();
         Image::make($Adminimage)->resize(300, 300)->save(public_path('/admin/avatars/' . $filename));

         $user = Auth::user();
         $user->Adminimage = $filename;
         $user->save();

         //if($request->hasFile('Adminimage')){
            //$imageName = Image::make($request->file('Adminimage')->getRealPath());
            //$imageName = $request->Adminimage->store('public');

        

        //$user = Auth::user();
        // $user->Adminimage = $imageName;
         //$user->save();
         
        }
        //return redirect()->back();
        return view('admin.layout.profile', array('user'=>Auth::user()));
    }
}
