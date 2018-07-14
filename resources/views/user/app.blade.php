<!DOCTYPE html>
<html lang="en">

<head>
    @include('user/layout/header')
</head>

<body>
	<div id="wrapper">
    @include('user/layout/navbar')
    
    @section('section')
    @show
    <!-- Main Content -->
    @section('main-content')

    @show

    @section('subscribe')
    @show
    @include('user/layout/footer')
    </div>
</body>

</html>
