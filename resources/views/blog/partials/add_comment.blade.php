{!! Form::open(array('route' => 'add_comment', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Your e-mail address')) !!}
</div>
<div class="form-group">
    {!! Form::label('Comment title') !!}
    {!! Form::text('title', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Your message')) !!}
</div>
<div class="form-group">
    {!! Form::label('Your Comment') !!}
    {!! Form::textarea('body', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::hidden('blog', $blog->id,
        array('required')) !!}

    {!! Form::submit('Submit',
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}