@extends('admin.layout.app')

@section('main-content')
 

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
 <div class="col-md-10 col-md-offset-1">
		<img src="/admin/avatars/{{$user->Adminimage}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
		<h2>{{$user->name}}'s profile </h2>
		 <form enctype="multipart/form-data" action ="/admin/profile" method="POST">
		 	{{ csrf_field() }}
  	<label>Update profile Imae</label>
  	<input type="file" name="Adminimage">
  	<input type="hidden" name="_token "  >
  	<input type="submit" name="" class="btn btn-sm btn-primary">
  </form>
	</div>


      </div>

@endsection
  