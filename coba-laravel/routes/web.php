<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rizky Ramdani",
        "email" => "rizkyramdani@unpas.ac.id",
        "image" => "rizky.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizky Ramdani",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni tempora iusto aliquid corporis fugit quasi, corrupti consectetur. Asperiores quia sint ipsum necessitatibus quae quo tempore nisi ea repellendus aliquid suscipit fugiat porro aut non explicabo similique, cupiditate veritatis excepturi in molestiae! Quae tenetur ipsum dolorem consequatur nesciunt exercitationem? Ducimus provident obcaecati blanditiis architecto omnis veritatis atque ratione. Nihil, iste. At rem obcaecati libero facere, nesciunt sed et numquam accusamus fugiat. Doloribus odio aut perspiciatis vel, cupiditate at quam sed facilis!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adit",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem aperiam optio sequi totam, velit officiis iure quaerat ducimus vitae exercitationem maiores aspernatur ad voluptate minus quas aut eum esse qui quis. Dicta, dolorem nisi, voluptatum praesentium quo ut fugiat, quidem minus animi vel veniam debitis numquam laborum recusandae fugit reiciendis quaerat. Nesciunt sunt maiores facere omnis! Ratione, provident odit, impedit optio ducimus autem nobis delectus reiciendis ipsa, consectetur porro. Ad ipsum exercitationem iste harum nulla placeat molestias quod eaque ratione ex eveniet doloribus sapiente reprehenderit quidem magni, eum tempore quas, consequuntur quis quos maiores! Culpa quam nemo beatae enim amet."
        ]
     ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});



// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizky Ramdani",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni tempora iusto aliquid corporis fugit quasi, corrupti consectetur. Asperiores quia sint ipsum necessitatibus quae quo tempore nisi ea repellendus aliquid suscipit fugiat porro aut non explicabo similique, cupiditate veritatis excepturi in molestiae! Quae tenetur ipsum dolorem consequatur nesciunt exercitationem? Ducimus provident obcaecati blanditiis architecto omnis veritatis atque ratione. Nihil, iste. At rem obcaecati libero facere, nesciunt sed et numquam accusamus fugiat. Doloribus odio aut perspiciatis vel, cupiditate at quam sed facilis!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adit",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem aperiam optio sequi totam, velit officiis iure quaerat ducimus vitae exercitationem maiores aspernatur ad voluptate minus quas aut eum esse qui quis. Dicta, dolorem nisi, voluptatum praesentium quo ut fugiat, quidem minus animi vel veniam debitis numquam laborum recusandae fugit reiciendis quaerat. Nesciunt sunt maiores facere omnis! Ratione, provident odit, impedit optio ducimus autem nobis delectus reiciendis ipsa, consectetur porro. Ad ipsum exercitationem iste harum nulla placeat molestias quod eaque ratione ex eveniet doloribus sapiente reprehenderit quidem magni, eum tempore quas, consequuntur quis quos maiores! Culpa quam nemo beatae enim amet."
        ]
     ];

     $new_post = [];
     foreach($blog_posts as $post) {
         if($post["slug"] === $slug) {
             $new_post = $post;
         }
     }

    return view('post', [
        "title" => "Single Pots",
        "post" => $new_post
    ]);

});