<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LaraBlog</title>

    @yield('header')

</head>
<body>



@include('layouts.partials._navigation')

<div class="container">
    @if(Session::has('message-info'))
        <div class="alert alert-info">
            {{Session::get('message-info')}}
        </div>
    @endif
    <div class="row">
        <div class="col-sm-9">@yield('content')</div>
        <div class="col-sm-3">@yield('right-bar')</div>

    </div>




</div>

@include('layouts.partials._footer')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
{{--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">--}}

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



{{--@include('layouts.partials._flash')--}}

@yield('footer')
</body>
</html>