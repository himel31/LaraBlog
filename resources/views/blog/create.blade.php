@extends('layouts.master')

@section('content')

    <h1>Create new post </h1>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {!! Form::open(array('route' => 'blog_store', 'class' => 'form')) !!}

    <div class="form-group">
        {!! Form::label('Title') !!}
        {!! Form::text('title', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your name')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Post') !!}
        {!! Form::textarea('body', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your message')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}

@endsection