@extends('user/app')
@section('bg-img', asset('user/images/thepeel_bg.jpg'))

@section('main-content')

<section class="grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="grid-posts-wrapper two-col">
                            <article class="card-post">
                                <div class="card-post-wrapper">

                                    <div class="blog-image">
                                      <img src="{{ asset('user/images/blog-2.jpg')}}">
                                    </div>


                                    <div class="card-post-content">
                                        <div class="post-body">
                                            <h3><a href="#">What's Coming to Netflix</a></h3>
                                            <p>Quae veritatis, quisquam ullam dolore quam in, consequatur, beatae delectus, fugit alias soluta nihil?</p>
                                        </div>

                                        <div class="post-footer">
                                            <h4 style="float:right;"><span class="post-time">Tech</span></h4>
                                            <div class="post-author">
                                                <img src="images/testimonial-2.jpg" alt="">
                                                <span class="author_name">by Jerry Ross</span>
                                                <span class="post-date">march 10,2018</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="card-post">
                                <div class="card-post-wrapper">
                                    <div class="blog-image" style="background-image: url('../images/blog-3.jpg');"></div>
                                    <div class="card-post-content">
                                        <div class="post-body">
                                            <h3><a href="#">What's Coming to Netflix</a></h3>
                                            <p>Quae veritatis, quisquam ullam dolore quam in, consequatur, beatae delectus, fugit alias soluta nihil?</p>
                                        </div>
                                        <div class="post-footer">
                                            <h4 style="float:right;"><span class="post-time">Design</span></h4>
                                            <div class="post-author">
                                                <img src="images/testimonial-2.jpg" alt="">
                                                <span class="author_name">by Jerry Ross</span>
                                                <span class="post-date">march 10,2018</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="card-post">
                                <div class="card-post-wrapper">
                                    <div class="blog-image" style="background-image: url('../images/blog-4.jpg');"></div>
                                    <div class="card-post-content">
                                        <div class="post-body">
                                            <h3><a href="#">What's Coming to Netflix</a></h3>
                                            <p>Quae veritatis, quisquam ullam dolore quam in, consequatur, beatae delectus, fugit alias soluta nihil?</p>
                                        </div>
                                        <div class="post-footer">
                                            <h4 style="float:right;"><span class="post-time">Art</span></h4>
                                            <div class="post-author">
                                                <img src="images/testimonial-2.jpg" alt="">
                                                <span class="author_name">by Jerry Ross</span>
                                                <span class="post-date">march 10,2018</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="card-post">
                                <div class="card-post-wrapper">
                                    <div class="blog-image" style="background-image: url('../images/blog-5.jpg');"></div>
                                    <div class="card-post-content">
                                        <div class="post-body">
                                            <h3><a href="#">What's Coming to Netflix</a></h3>
                                            <p>Quae veritatis, quisquam ullam dolore quam in, consequatur, beatae delectus, fugit alias soluta nihil?</p>
                                        </div>
                                        <div class="post-footer">
                                            <h4 style="float:right;"><span class="post-time">Books</span></h4>
                                            <div class="post-author">
                                                <img src="images/testimonial-2.jpg" alt="">
                                                <span class="author_name">by Jerry Ross</span>
                                                <span class="post-date">march 10,2018</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
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

@endsection
