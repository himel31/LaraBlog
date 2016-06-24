@extends('layouts.master')

@section('content')

    <div class="jumbotron">
        <h1>LaraBlog</h1>
        <p>Creating a blog in Laravel 5</p>
    </div>

    @foreach($blogs as $blog)

        <h4>{{ Html::link('/blog/'.$blog->id, $blog->title)}}</h4>
        <hr>
        <p class="small">{{ $blog->created_at }}</p>
        <p>{{$blog->body }}</p>

    @endforeach
    {!! $blogs->render() !!}

@endsection