<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\facades\Storage;

class PostController extends Controller
{
    public function index(){

        // dd(request('search'));
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '.$category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' in '.$author->name;           
        }
        

        return view('posts',[
            "title" => 'All posts' . $title,
            // "posts" => Post::all()
            "active" => 'Posts',
            // "posts" => Post::latest()->filter(request(['search','category','author']))->get()
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);

    }

    public function show(Post $post){
        return view('post',[
            "title" => 'Single Post',
            "active" => 'Posts',
            "post" => $post
        ]);
    }
}
