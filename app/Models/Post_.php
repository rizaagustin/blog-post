<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
class Post 
{
    // use HasFactory;

    static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Riza Agustin",
            "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, est beatae! Fugit dolore ratione tempora deserunt. Ea molestias, possimus dolorem, laudantium cumque dicta ullam placeat, repudiandae nostrum dolor consequatur optio aliquam doloremque! Quos eius, voluptatum natus maiores voluptatibus esse voluptate, fugiat adipisci repudiandae deserunt ab doloribus similique ipsum saepe veniam, tenetur quisquam assumenda quasi ducimus odit excepturi veritatis laboriosam. Aperiam consequuntur laudantium ipsa aut laborum corrupti quia modi quidem saepe unde ab molestias possimus minus, temporibus ducimus minima recusandae atque."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Billy 2",
            "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, est beatae! Fugit dolore ratione tempora deserunt. Ea molestias, possimus dolorem, laudantium cumque dicta ullam placeat, repudiandae nostrum dolor consequatur optio aliquam doloremque! Quos eius, voluptatum natus maiores voluptatibus esse voluptate, fugiat adipisci repudiandae deserunt ab doloribus similique ipsum saepe veniam, tenetur quisquam assumenda quasi ducimus odit excepturi veritatis laboriosam. Aperiam consequuntur laudantium ipsa aut laborum corrupti quia modi quidem saepe unde ab molestias possimus minus, temporibus ducimus minima recusandae atque dsdsadasda."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        // static::all() -> mengambil data dati function diatas
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }        
        return $posts->firstWhere('slug',$slug);   
    }
}


Post::create([
    'title' => 'Judul Post Keempat',
    'category_id' => 2,
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo,est beatae! Fugit dolore ratione tempora deserunt.',
    'slug' => 'judul-post-keempat',
    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, est beatae! Fugit dolore ratione tempora deserunt. Ea molestias, possimus dolorem, laudantium cumque dicta ullam placeat, repudiandae nostrum dolor consequatur optio aliquam doloremque! Quos eius, voluptatum natus maiores voluptatibus esse voluptate, fugiat adipisci repudiandae deserunt ab doloribus similique ipsum saepe veniam, tenetur quisquam assumenda quasi ducimus odit excepturi veritatis laboriosam. Aperiam consequuntur laudantium ipsa aut laborum corrupti quia modi quidem saepe unde ab molestias possimus minus, temporibus ducimus minima recusandae atque.'])
