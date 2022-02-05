<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

       User::create([
            'name' => 'Rizky',
            'email' => 'rizky@gmail.com',
            'password' => bcrypt('12345')
       ]); 

       Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
       ]);

       Category::create([
        'name' => 'Personal',
        'slug' => 'personal'
     ]);

     Post::create([
        'title' => 'Judul Pertama',
        'slug' => 'judul-pertama',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores voluptas hic amet iste voluptatem reprehenderit ab repellat ipsa a corrupti.',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores voluptas hic amet iste voluptatem reprehenderit ab repellat ipsa a corrupti. Dicta molestias iste vitae. Doloribus voluptatibus velit nulla! Velit, corporis unde numquam doloremque, optio aliquid ipsam odit veritatis similique asperiores iste in laboriosam et sunt neque! Officiis vitae voluptatem deleniti, aut, impedit expedita non culpa tenetur, cupiditate ex consequuntur fugiat! Ipsa iure consequuntur deserunt minus nemo placeat dolorem. Corrupti eligendi eaque dicta quisquam nemo, fuga placeat facilis impedit quam accusantium, soluta consequatur magnam excepturi alias voluptate ipsam nesciunt repellendus consectetur dolorum, aut beatae fugiat quo voluptatum pariatur? Ipsum, itaque impedit!.',
        'category_id' => 1,
        'user_id' => 1
    ]);

      Post::create([
         'title' => 'Judul Ke Dua',
         'slug' => 'judul-ke-dua',
         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores voluptas hic amet iste voluptatem reprehenderit ab repellat ipsa a corrupti.',
         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores voluptas hic amet iste voluptatem reprehenderit ab repellat ipsa a corrupti. Dicta molestias iste vitae. Doloribus voluptatibus velit nulla! Velit, corporis unde numquam doloremque, optio aliquid ipsam odit veritatis similique asperiores iste in laboriosam et sunt neque! Officiis vitae voluptatem deleniti, aut, impedit expedita non culpa tenetur, cupiditate ex consequuntur fugiat! Ipsa iure consequuntur deserunt minus nemo placeat dolorem. Corrupti eligendi eaque dicta quisquam nemo, fuga placeat facilis impedit quam accusantium, soluta consequatur magnam excepturi alias voluptate ipsam nesciunt repellendus consectetur dolorum, aut beatae fugiat quo voluptatum pariatur? Ipsum, itaque impedit!.',
         'category_id' => 1,
         'user_id' => 1
    ]);

        Post::create([
         'title' => 'Judul Ke Tiga',
         'slug' => 'judul-ke-tiga',
         'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores voluptas hic amet iste voluptatem reprehenderit ab repellat ipsa a corrupti.',
         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores voluptas hic amet iste voluptatem reprehenderit ab repellat ipsa a corrupti. Dicta molestias iste vitae. Doloribus voluptatibus velit nulla! Velit, corporis unde numquam doloremque, optio aliquid ipsam odit veritatis similique asperiores iste in laboriosam et sunt neque! Officiis vitae voluptatem deleniti, aut, impedit expedita non culpa tenetur, cupiditate ex consequuntur fugiat! Ipsa iure consequuntur deserunt minus nemo placeat dolorem. Corrupti eligendi eaque dicta quisquam nemo, fuga placeat facilis impedit quam accusantium, soluta consequatur magnam excepturi alias voluptate ipsam nesciunt repellendus consectetur dolorum, aut beatae fugiat quo voluptatum pariatur? Ipsum, itaque impedit!.',
         'category_id' => 2,
         'user_id' => 1
    ]);

    }
}
