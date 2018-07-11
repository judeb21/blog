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
                            <h3 class="box-title">Titles</h3>
                          </div>
                          @include('includes.messages');
                          <!-- /.box-header -->
                          <!-- form start -->
                        <form role="form" action="{{ route('category.update', $category->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="box-body">
                                <div class="col-lg-offset-2 col-lg-6">
                              <div class="form-group">
                                <label for="name">Category name</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="{{ $category->name }}">
                              </div>
                              <div class="form-group">
                                    <label for="slug">Cateory Slug</label>
                              <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $category->slug }}">
                              </div>
                              <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                              <a type="submit" href="{{ route('category.index') }}" class="btn btn-warning">Back</a>
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
