@extends('user/app')

@section('bg-img', Storage::disk('local')->url($slug->image))
@section('title', $slug->title)
@section('sub-title', $slug->subtitle)

@section ('main-content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=470359236749222&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!!htmlspecialchars_decode($slug->body)!!}
                    <small> created at {{$slug->created_at->diffForHumans()}}</small>
                    @foreach($slug->categories as $category)
                      <small class="pull-right" style="margin-right:20px">
                          <a href="">{{$category -> name}} </a>
                      </small>
                    @endforeach
                </div>
                <div class="fb-comments" style="margin-top:30px;" data-href="{{ Request::url()}}" data-numposts="5"></div>
            </div>
        </div>

    </article>

    <hr>
@endsection
