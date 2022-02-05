<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni tempora iusto aliquid corporis fugit quasi, corrupti consectetur. Asperiores quia sint ipsum necessitatibus quae quo tempore nisi ea repellendus aliquid suscipit fugiat porro aut non explicabo similique, cupiditate veritatis excepturi in molestiae! Quae tenetur ipsum dolorem consequatur nesciunt exercitationem? Ducimus provident obcaecati blanditiis architecto omnis veritatis atque ratione. Nihil, iste. At rem obcaecati libero facere, nesciunt sed et numquam accusamus fugiat. Doloribus odio aut perspiciatis vel, cupiditate at quam sed facilis!"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem aperiam optio sequi totam, velit officiis iure quaerat ducimus vitae exercitationem maiores aspernatur ad voluptate minus quas aut eum esse qui quis. Dicta, dolorem nisi, voluptatum praesentium quo ut fugiat, quidem minus animi vel veniam debitis numquam laborum recusandae fugit reiciendis quaerat. Nesciunt sunt maiores facere omnis! Ratione, provident odit, impedit optio ducimus autem nobis delectus reiciendis ipsa, consectetur porro. Ad ipsum exercitationem iste harum nulla placeat molestias quod eaque ratione ex eveniet doloribus sapiente reprehenderit quidem magni, eum tempore quas, consequuntur quis quos maiores! Culpa quam nemo beatae enim amet."
        ]
     ];

     public static function all()
     {
         return collect (self::$blog_posts);
     }

     public static function find($slug)
     {
         $posts = static::all();
        return $posts->firstWhere('slug', $slug);
     }
}
