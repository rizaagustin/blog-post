<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Riza Agustin',
            'username' => 'rizagustin',
            'email' => 'rizaagustin20@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Billy',
        //     'email' => 'billy20@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(5)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo,est beatae! Fugit dolore ratione tempora deserunt.',
        //     'slug' => 'judul-pertama',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, est beatae! Fugit dolore ratione tempora deserunt. Ea molestias, possimus dolorem, laudantium cumque dicta ullam placeat, repudiandae nostrum dolor consequatur optio aliquam doloremque! Quos eius, voluptatum natus maiores voluptatibus esse voluptate, fugiat adipisci repudiandae deserunt ab doloribus similique ipsum saepe veniam, tenetur quisquam assumenda quasi ducimus odit excepturi veritatis laboriosam. Aperiam consequuntur laudantium ipsa aut laborum corrupti quia modi quidem saepe unde ab molestias possimus minus, temporibus ducimus minima recusandae atque.']);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo,est beatae! Fugit dolore ratione tempora deserunt.',
        //     'slug' => 'judul-ke-dua',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, est beatae! Fugit dolore ratione tempora deserunt. Ea molestias, possimus dolorem, laudantium cumque dicta ullam placeat, repudiandae nostrum dolor consequatur optio aliquam doloremque! Quos eius, voluptatum natus maiores voluptatibus esse voluptate, fugiat adipisci repudiandae deserunt ab doloribus similique ipsum saepe veniam, tenetur quisquam assumenda quasi ducimus odit excepturi veritatis laboriosam. Aperiam consequuntur laudantium ipsa aut laborum corrupti quia modi quidem saepe unde ab molestias possimus minus, temporibus ducimus minima recusandae atque.']);            

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo,est beatae! Fugit dolore ratione tempora deserunt.',
        //     'slug' => 'judul-ke-tiga',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, est beatae! Fugit dolore ratione tempora deserunt. Ea molestias, possimus dolorem, laudantium cumque dicta ullam placeat, repudiandae nostrum dolor consequatur optio aliquam doloremque! Quos eius, voluptatum natus maiores voluptatibus esse voluptate, fugiat adipisci repudiandae deserunt ab doloribus similique ipsum saepe veniam, tenetur quisquam assumenda quasi ducimus odit excepturi veritatis laboriosam. Aperiam consequuntur laudantium ipsa aut laborum corrupti quia modi quidem saepe unde ab molestias possimus minus, temporibus ducimus minima recusandae atque.']);             

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo,est beatae! Fugit dolore ratione tempora deserunt.',
        //     'slug' => 'judul-ke-empat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, est beatae! Fugit dolore ratione tempora deserunt. Ea molestias, possimus dolorem, laudantium cumque dicta ullam placeat, repudiandae nostrum dolor consequatur optio aliquam doloremque! Quos eius, voluptatum natus maiores voluptatibus esse voluptate, fugiat adipisci repudiandae deserunt ab doloribus similique ipsum saepe veniam, tenetur quisquam assumenda quasi ducimus odit excepturi veritatis laboriosam. Aperiam consequuntur laudantium ipsa aut laborum corrupti quia modi quidem saepe unde ab molestias possimus minus, temporibus ducimus minima recusandae atque.']);                         

        }

}
