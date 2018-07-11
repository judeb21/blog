@extends('user/app')
@section('bg-img', asset('user/img/home-bg.jpg'))
@section('title', 'The Peel')
@section('sub-title', 'Welcome to the Peel')

@section('main-content')
<div class="container">
        <div class="row-padding">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <h2 class="post-meta"> Read More</h2>
                    </div>
            <div class="col m6">
                    
                    <a href="{{route ('read') }}">
        <div class="photo-grid" style="float:left">
	     <div class="grid-item" style="width:400px;">
			<figure>
				<img src="http://blog.zealousgood.com/wp-content/uploads/2013/05/tools.jpg" height="100%" width="100%" alt="tools">
				<figcaption>
                 <p>BEHIND THE SCENE</p>
                </figcaption>
			</figure>
	            </div>
                </div>
</a>
</div>
</div>
            <div class="col m6">

            <a href="{{route ('read') }}">
        <div class="photo-grid" style="float:right">
	     <div class="grid-item" style="width:400px;">
			<figure>
				<img src="http://blog.zealousgood.com/wp-content/uploads/2013/05/tools.jpg" height="100%" width="100%" alt="tools">
				<figcaption>
                 <p>THOUGHTS AND IDEAS</p>
                </figcaption>
			</figure>
	            </div>
                </div>

</div>
</div>
</div>
</a>

<hr>
<form>
  <input type="email" id="email"/>
  <label for="email">email address</label>
  <button id="button">OK</button>
</form>

</div>
@endsection
