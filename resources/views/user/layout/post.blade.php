@extends('user/app')

@section ('main-content')
 
        <section class="container category">
            <div class="category-header">
                <h1 class="category_title h1">

                    {!!htmlspecialchars_decode($post->title)!!}
                </h1>
            </div>

        </section>
        <section class="grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <div class="mobile-section">
                            <div id="shareIconsCountInside"></div>
                        </div>

                    </div>



                    <div class="col-md-7">
                        <article class="post-single">
                          <div class="post-body">
                            <small> created at {{$post->created_at->diffForHumans()}}</small>
                    @foreach($post->categories as $category)
                      <small class="pull-right" style="margin-right:20px">
                          <a href="{{ route('category', $category->slug)}}">{{$category -> name}} </a>
                      </small>
                    @endforeach
                            {!!htmlspecialchars_decode($post->body)!!}
                            
                            </div>

                        </article>
                    </div>

                     <div class="col-md-3 col-md-offset-1">
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
            <div class="writter-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-offset-1">
                            <div id="writter">
                                <ul class="writter-list">
                                    <li>
                                        <div class="wriiter">
                                            <div class="writter-pic">
                                                <img alt="" src="images/testimonial-2.jpg">
                                            </div>
                                            <div class="writter-text">
                                                <h4 class="upper">Susan Onigbinde </h5>
                                                    <h5>CEO of DODO Design Agency</h5>
                                                    <p>Error, quaerat quod, soluta molestias ipsum expedita tempora rem voluptatibus sunt, ab possimus necessitatibus.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
               <section class="subscribe">
            <div class="container">

                <form class="form-inline">
                    <div class="form-group">

                        <label>Signup for Newsletter</label>

                        <input type="email" class="form-control" id="exampleInputName2" placeholder="Email address">
                    </div>

                    <button type="submit" class="btn btn-lg">SUBSCRIBE</button>
                </form>
            </div>

        </section>
@endsection
