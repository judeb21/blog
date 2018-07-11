@extends('admin.layout.app')

@section('main-content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Text Editor
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Users</a></li>
            <li class="active">Editors</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">

                        <!-- general form elements -->
                        <div class="box box-primary">
                          <div class="box-header with-border">
                            <h3 class="box-title">Update Admin</h3>
                          </div>
                          @include('includes.messages');
                          <!-- /.box-header -->
                          <!-- form start -->
                        <form role="form" action="{{ route('user.update',$user->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="box-body">
                                <div class="col-lg-offset-2 col-lg-6">
                              <div class="form-group">
                                <label for="name">Admin Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Admin Name" value="@if(old('name')){{ old('name')}}@else{{$user->name}}@endif">
                              </div>
                              <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="@if(old('email')){{ old('email')}}@else{{$user->email}}@endif">
                              </div>
                              <div class="form-group">
                                <label for="name">Job Description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Job Description" value="@if(old('description')){{ old('description')}}@else{{$user->description}}@endif">
                              </div>
                              <div class="form-group">
                                    <label for="phone">Phone No.</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="@if(old('phone')){{ old('phone')}}@else{{$user->phone}}@endif">
                              </div>
                              <div class="form-group">
                                    <label for="confirm_password">Status</label>
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="status" 
                                          @if (old('status')==1 || $user->status==1)
                                          checked 
                                          @endif value="1">Status
                                        </label>
                                      </div>
                              </div>
                              <div class="form-group col-lg-12">
                                <label>Assign role</label>
                                <div class="row">
                                @foreach ($roles as $role)
                                    <div class="col-lg-4">
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="role[]"value="{{$role -> id}}"
                                          @foreach($user->roles as $user_role)
                                          @if($user_role->id == $role->id)
                                          checked
                                          @endif
                                          @endforeach>{{ $role->name }}
                                        </label>
                                      </div>
                                    </div>
                                @endforeach
                              </div>
                              </div>
                              <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                              <a type="submit" href="{{ route('user.index') }}" class="btn btn-warning">Back</a>
                              </div>
                            </div>
                            </div>
                          </form>
                        </div>
                            <!-- /.box-body -->

              <!-- /.box -->

            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
      </div>

@endsection
