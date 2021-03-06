@extends('admin.layout.app')

@section('main-content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Text Editors
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Role</a></li>
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
                            <h3 class="box-title">Edit Role</h3>
                          </div>
                          @include('includes.messages');
                          <!-- /.box-header -->
                          <!-- form start -->
                        <form role="form" action="{{ route('role.update', $role->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="box-body">
                                <div class="col-lg-offset-2 col-lg-6">
                              <div class="form-group">
                                <label for="name">Role name</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Role Name" value="{{ $role->name }}">
                              </div>

                              <div class="row">
                              <div class="col-lg-4">
                                <label for="name">Post Permissions</label>
                                @foreach($permissions as $permission)
                                @if ($permission -> for == 'post')
                                <div class="checkbox">
                                  <label><input type="checkbox" name='permission[]' value="{{$permission->id}}"
                                    @foreach($role->permissions as $role_permit)
                                    @if($role_permit->id == $permission->id)
                                    checked
                                    @endif
                                    @endforeach
                                  >{{$permission -> name}}</label>
                                </div>
                                @endif
                                @endforeach
                              </div>
                              <div class="col-lg-4">
                                <label for="name">User Permissions</label>
                                @foreach($permissions as $permission)
                                @if ($permission -> for == 'user')
                                <div class="checkbox">
                                  <label><input type="checkbox" name='permission[]' value="{{$permission->id}}"
                                    @foreach($role->permissions as $role_permit)
                                    @if($role_permit->id == $permission->id)
                                    checked
                                    @endif
                                    @endforeach
                                  >{{$permission -> name}}</label>
                                </div>
                                @endif
                                @endforeach
                              </div>
                              <div class="col-lg-4">
                                <label for="name">Others</label>
                                @foreach($permissions as $permission)
                                @if ($permission -> for == 'other')
                                <div class="checkbox">
                                  <label><input type="checkbox" name='permission[]' value="{{$permission->id}}"
                                    @foreach($role->permissions as $role_permit)
                                    @if($role_permit->id == $permission->id)
                                    checked
                                    @endif
                                    @endforeach
                                  >{{$permission -> name}}</label>
                                </div>
                                @endif
                                @endforeach
                              </div>
                            </div>

                              <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                              <a type="submit" href="{{ route('role.index') }}" class="btn btn-warning">Back</a>
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
