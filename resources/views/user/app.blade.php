<!DOCTYPE html>
<html lang="en">

<head>
    @include('user/layout/header')
</head>

<body>
	<div id="wrapper">
    @include('user/layout/navbar')
    <!-- Main Content -->
    @include('user/layout/section')

    @section('main-content')

    @show
    @section('sidebar')
    @show
    @include('user/layout/footer')
    </div>
</body>

</html>
