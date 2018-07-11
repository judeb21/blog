@extends('user/app')

@section('bg-img', asset('user/img/post-sample-image.jpg'))
@section('title', 'The Peel')
@section('sub-title', 'Read more behind the scene')

@section('main-content')
<div class="container">
    <div class="row" align="left" id="v-for-blog">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
           <post
            v-for='value in blog'
            title='title'></post>
        </div>
    </div>

    <hr>
    <!-- Pager -->
    <ul class="pager">
        <li class="next">
            {{ $posts->links() }}
        </li>
    </ul>
</div>
</div>
</div>

</div>
@endsection
@section('footer')
<script src="{{ asset('js/app.js') }}"></script>
@endsection
