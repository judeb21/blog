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
                            <h3 class="box-title">Add Admin</h3>
                          </div>
                          @include('includes.messages');
                          <!-- /.box-header -->
                          <!-- form start -->
                        <form role="form" action="{{ route('user.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="col-lg-offset-2 col-lg-6">
                              <div class="form-group">
                                <label for="name">Admin Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Admin Name" value="{{ old('name')}}">
                              </div>
                              <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email')}}">
                              </div>
                              <div class="form-group">
                                    <label for="description">Job Description</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="description" value="{{ old('description')}}">
                              </div>
                              <div class="form-group">
                                    <label for="phone">Phone No.</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="{{ old('phone')}}">
                                  </div>
                                 <div class="form-group">
                                  <img src="/admin/avatars/default.png/" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
                                              <label for="Adminimage">Add Image (Optional) </label>
                                              <input type="file" name="Adminimage" id="exampleInputFile">
                                                <hr>
                                                <br>
                              </div>
                              <hr><br><br>
                              <div class="form-group">
                              <label for="password">Password</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                              </div>
                              <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm password">
                              </div>
                              <div class="form-group">
                                    <label for="status">Status</label>
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="status" @if (old('status') == 1)
                                          checked 
                                          @endif
                                          value="1">Status
                                        </label>
                                      </div>
                              </div>
                              <div class="form-group col-lg-12">
                                <label>Assign role</label>
                                <div class="row">
                                @foreach ($roles as $role)
                                    <div class="col-lg-3">
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="role[]"value="{{$role -> id}}">{{ $role->name }}
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
