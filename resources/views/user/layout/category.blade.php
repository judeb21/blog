@extends('user/app')

@section('main-content')
 
        <section class="container category">
            <div class="category-header">
            	 
            	<h1 class="category_title h1">
            		 
            	</h1>
               
            </div>

        </section>
        <section class="grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="grid-posts-wrapper two-col">
                        	@foreach ($posts as $post)
                            <a href="{{ route('post', $post->slug)}}"><article class="card-post">
                                <div class="card-post-wrapper">

                                    <div class="blog-image">
                                      <img src="{{ asset('user/images/chicken.jpg')}}">
                                    </div>


                                    <div class="card-post-content">
                                        <div class="post-body">
                                            <h3><a href="{{ route('post', $post->slug)}}"> {{ $post->title }} </a></h3>
                                            <p> </p>
                                        </div>

                                        <div class="post-footer">
                                          @foreach($post->categories as $category)
                                          <a href="{{ route('post', $post->slug) }}">
                                            <h4 style="float:right;"><span class="post-time">{{ $category->name }}</span></h4></a>
                                            @endforeach
                                            <div class="post-author">
                                                <img src="{{ asset('/user/images/testimonial-2.jpg')}}" alt="">
                                                <span class="author_name">by Jerry Ross</span>
                                                <span class="post-date">{{ date('F d, Y',  strtotime($post->created_at)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article></a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-3  col-md-offset-1 ">
                        <div id="sidebar">
                            <div class="widget">
                                <h5>Search</h5>
                                <form class="searchform" action="" method="get">
                                    <input class="form-control search" type="search" required="required" name="s" placeholder="Search..." value="">
                                </form>
                            </div>

                            <div class="widget">
                                <h5>Categories</h5>
                                <ul>
                                	@foreach ($categories as $category)
                                    <li><a href="{{ route('category', $category->slug)}}">{{$category->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="widget">
                                <h5>Most Read</h5>
                                <ul>
                                    <li><a href="#">Minimum Viable DevOps</a>
                                    </li>
                                    <li><a href="#">How to Get What You Want</a>
                                    </li>
                                    <li><a href="#">Answering Everything</a>
                                    </li>
                                    <li><a href="#">Startup Rules</a>
                                    </li>
                                    <li><a href="#">Email Can Wait</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="viewmore" style="text-align: center;">
                <h4><a href="">View More</a></h4>
            </div>
        </section>
        <section class="subscribe">
            <div class="container">

                <form class="form-inline">
                    <div class="form-group">

                        <input type="email" class="form-control" id="exampleInputName2" placeholder="Email address">
                    </div>

                    <button type="submit" class="btn btn-lg">SUBSCRIBE</button>
                </form>
            </div>

        </section>

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
