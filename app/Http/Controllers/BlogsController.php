<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests\CommentAddRequest;
use App\Http\Requests\BlogAddRequest;

class BlogsController extends Controller
{
    public function home() {
        return view('blog.home')->withBlogs(Blog::paginate(10));
    }

    public function view(Blog $blog) {
        return view('blog.view')->withBlog($blog::with('comments')->first());
    }

    public function add_comment(CommentAddRequest $request) {
        $comment = new Comment(['title'=> $request->input('title'), 'body'=> $request->input('body')]);
        $blog = Blog::find($request->input('blog'));
        $blog->comments()->save($comment);

        return back()
            ->with('message-info', 'Thanks for your comment!');
    }
    public function new_blog_form() {
        return view('blog.create');
    }

    public function blog_store(BlogAddRequest $request) {
        $blog = new Blog(['title'=> $request->input('title'), 'body'=> $request->input('body')]);
        $blog->save();

        return \Redirect::route('home_path')
            ->with('message-info', 'Blog post added successfully!');
    }


}
