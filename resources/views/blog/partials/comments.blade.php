<section>
<h2>Comments</h2>
@include('blog.partials.add_comment')

@foreach($blog->comments as $comment)

    <h3>{{ $comment->title }}</h3>
    <p class="small">{{ $comment->created_at }}</p>
    <p>{{ $comment->body }}</p>

@endforeach
</section>