<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Amelia Pertiwi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, impedit voluptatem commodi dolore eum et beatae deserunt totam quod. Tenetur alias nostrum omnis ullam aliquam repudiandae corrupti ipsum. Laboriosam aut alias atque eveniet nihil, sequi quaerat eum fugiat ad iure aperiam cupiditate et. Explicabo placeat qui natus. Veniam molestias sequi ea incidunt qui, nam adipisci rerum error molestiae labore suscipit numquam veritatis et, autem commodi, deleniti ex voluptatibus debitis natus! Sequi voluptatem consectetur voluptas dolorem libero soluta temporibus, voluptate beatae?."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ainur Ridho Alfaruq",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti ratione, a debitis numquam veniam accusamus ducimus recusandae sapiente obcaecati? Cumque sint hic dolor assumenda aperiam reprehenderit quaerat nobis ipsam itaque incidunt in, porro deserunt facilis iusto odit, quo optio eum esse dolores vitae repellendus ea natus. Numquam autem tempora veritatis sit nulla eaque voluptates esse odit earum pariatur qui obcaecati facilis doloribus eligendi incidunt, dolorum illum consequatur nostrum voluptatum voluptatibus commodi magnam? Atque iste voluptatibus animi tenetur amet mollitia et ipsum, quidem omnis provident error recusandae, debitis voluptatem ad modi veniam cum molestiae veritatis deleniti corporis tempora. Provident, quos odit!"
        ],
    ];

    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find ($slug)
    {
        $posts = static::all();
      
   return $posts->firstWhere('slug',$slug);
    }
}

