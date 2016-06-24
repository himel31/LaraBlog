<!-- Fixed navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home_path') }}">LaraBlog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('home_path') }}">Home</a></li>
                <li><a href="{{ route('add_blog') }}">New post</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact us</a></li>

            </ul>

            {{--@if ( $signedIn | false )--}}
                {{--<p class="navbar-text navbar-right">--}}
                    {{--Hello, {{ $user->name }}--}}
                {{--</p>--}}
            {{--@endif--}}
        </div><!--/.nav-collapse -->
    </div>
</nav>