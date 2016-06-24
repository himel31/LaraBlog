@extends('layouts.master')

@section('content')
    <header>
        <h1>{{ $blog->title }}</h1>
        <p class="small">{{ $blog->created_at }}</p>
    </header>
    <hr class="clearfix">
    <article>{{ $blog->body }}</article>
    <hr>

    @include('blog.partials.comments')

@endsection