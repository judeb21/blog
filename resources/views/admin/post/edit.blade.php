@extends('admin/layout/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Text Editors
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Posts</a></li>
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
                    <form role="form" action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="box-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Post Title" value="{{ $post->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Sub title</label>
                                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter sub title" value="{{ $post->subtitle }}">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Post Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $post->slug }}">
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="form-group">
                                        <label for="image">Add Media</label>
                                        <input type="file" name="image" id="exampleInputFile" value="{{ $post->slug }}">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="status" value="1" @if($post->status == 1) checked @endif> Publish
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: 18px;">
                                        <label>Multiple Cateory</label>
                                        <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Category" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @foreach ($post -> categories as $postCategory)
                                                  @if ($postCategory -> id == $category -> id)
                                                  selected
                                                  @endif
                                                @endforeach
                                            >{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <hr>
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- /.form-group -->
                                </div>

                            </div>

                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Write post body here
                                    <small>Simple and fast</small>
                                </h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">

                                <textarea id="editor1" placeholder="Place some text here" name="body"
                                style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body }}</textarea>

                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="submit" href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->

                    <!-- /.box -->


                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>

@endsection
@section('footerSection')
<script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
<script>
    $(document).ready(function () {
        //Initialize Select2 Elements
        $('.select2').select2();
    });
</script>
<script>
        $(function () {
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
          CKEDITOR.replace('editor1')
          //bootstrap WYSIHTML5 - text editor
          $('.textarea').wysihtml5()
        })
      </script>
@endsection
