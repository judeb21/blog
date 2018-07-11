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
            <li><a href="#">Category</a></li>
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
                            <h3 class="box-title">Permissions</h3>
                          </div>
                          @include('includes.messages');
                          <!-- /.box-header -->
                          <!-- form start -->
                        <form role="form" action="{{ route('permission.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="col-lg-offset-2 col-lg-6">
                              <div class="form-group">
                                <label for="name">Permission</label>
                                <input type="text" class="form-control" id="permission" name="name" placeholder="Permission">
                              </div>

                              <div class="form-group">
                                <label for="for">Permission</label>
                                <select class="form-control" id="fore" name="for">
                                  <option selected disabled>Select Permission for</option>
                                  <option value="user">user</option>
                                  <option value="post">Post</option>
                                  <option value="other">other</option>
                                </select>
                              </div>
                             
                              <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                              <a type="submit" href="{{ route('permission.index') }}" class="btn btn-warning">Back</a>
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
