<?php

use App\Models\Post;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("home",[
        "title" => "Home",
        'active' => "Home",
    ]);
});

Route::get('/about', function () {
    return view("about",[
        "title" => "About",
        "name" => "Riza Agustin",
        'active' => "About",
    	"email" => "gmail@riza.com",
    	"img" => "ppriza.jpg"
    ]);
});

Route::get('posts/{post:slug}',[PostController::class,'show']);
Route::get('/posts',[PostController::class,'index']);
Route::get('/categories',function(){
    return view ('categories',[
        'title' => 'Post Categories',
        'active' => 'Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

// Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');


// harus diatas resource
Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug']);

Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');

// except kecuali show tidak bisa diakses route nya
Route::resource('/dashboard/categories',AdminCategoryController::class)->except('show')->middleware('admin');


// Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug']);
// Route::get('/categories/{category:slug}',function(Category $category){
//     return view('category',[
//         'title' => $category->name,
//         'posts' => $category->posts,
//         'category' => $category->name
//     ]);
// });

// Route::get('/categories/{category:slug}',function(Category $category){
//     return view('posts',[
//         'title' => "Post By Category : $category->name",
//         'active' => 'Categories',
//         'posts' => $category->posts->load('category','author')
//     ]);
// });

// Route::get('/authors/{author:username}',function(User $author){
//     return view('posts',[
//         'title' => "Post By Author : $author->name",
//         'active' => 'Blog',
//         'posts' => $author->posts->load('category','author')
//     ]);
// });

// Route::get('/blog', function () {
//     $blog_posts = [
//         [
//             "title" => "Judul Post Pertama",
//             "slug" => "judul-post-pertama",
//             "author" => "Riza Agustin",
//             "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, est beatae! Fugit dolore ratione tempora deserunt. Ea molestias, possimus dolorem, laudantium cumque dicta ullam placeat, repudiandae nostrum dolor consequatur optio aliquam doloremque! Quos eius, voluptatum natus maiores voluptatibus esse voluptate, fugiat adipisci repudiandae deserunt ab doloribus similique ipsum saepe veniam, tenetur quisquam assumenda quasi ducimus odit excepturi veritatis laboriosam. Aperiam consequuntur laudantium ipsa aut laborum corrupti quia modi quidem saepe unde ab molestias possimus minus, temporibus ducimus minima recusandae atque."
//         ],
//         [
//             "title" => "Judul Post Kedua",
//             "slug" => "judul-post-kedua",
//             "author" => "Billy",
//             "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, est beatae! Fugit dolore ratione tempora deserunt. Ea molestias, possimus dolorem, laudantium cumque dicta ullam placeat, repudiandae nostrum dolor consequatur optio aliquam doloremque! Quos eius, voluptatum natus maiores voluptatibus esse voluptate, fugiat adipisci repudiandae deserunt ab doloribus similique ipsum saepe veniam, tenetur quisquam assumenda quasi ducimus odit excepturi veritatis laboriosam. Aperiam consequuntur laudantium ipsa aut laborum corrupti quia modi quidem saepe unde ab molestias possimus minus, temporibus ducimus minima recusandae atque dsdsadasda."
//         ],
//     ];

//     return view("posts",[
//         "title" => 'Posts',
//         "posts" => $blog_posts
//     ]);
// });

// halaman single post



