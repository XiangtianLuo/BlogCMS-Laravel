<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;

class PostsController extends Controller
{
    public function show(Post $post){
        return view('blog.show')->with('post', $post);
    }

    public function category(Category $category){
        return view('welcome')
        ->with('posts', $category->posts()->paginate(4))
        ->with('categories',Category::all())
        ->with('tags',Tag::all());
    }

    public function tag(Tag $tag){
        return view('welcome')
        ->with('posts', $tag->posts()->paginate(4))
        ->with('categories',Category::all())
        ->with('tags',Tag::all());
    }
}
