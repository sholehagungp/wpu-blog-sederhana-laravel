<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [ //properti static
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aan",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, fugit expedita. Et maiores explicabo ducimus, distinctio molestias doloribus repellat. Alias tempore accusantium dolores atque, aut fugiat optio minus doloribus illo.
            Vel, beatae doloremque, veniam corporis eos obcaecati nihil blanditiis molestias voluptate repellat labore nulla rem aut, hic atque commodi quo cumque. Nisi tempore iure cum consequatur fuga temporibus consequuntur dolorum!"
            ],
            [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bagio",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, fugit expedita. Et maiores explicabo ducimus, distinctio molestias doloribus repellat. Alias tempore accusantium dolores atque, aut fugiat optio minus doloribus illo.
            Vel, beatae doloremque, veniam corporis eos obcaecati nihil blanditiis molestias voluptate repellat labore nulla rem aut, hic atque commodi quo cumque. Nisi tempore iure cum consequatur fuga temporibus consequuntur dolorum!"
            ],
    ];

    public static function all(){ //method static
        return collect(self::$blog_posts);
    }
    public static function find($slug){  // dibawah ini merupakan methode static
        $posts = static::all(); //mengambil fungsi all dengan collect(funsgi collection =>array yang keren)
    //     $posts = self::$blog_posts;
    //     $post = [];
    //     foreach($posts as $p){
    //     if ($p["slug"]=== $slug) {
    //         $post = $p;
    //     }
    // }
     return $posts->firstWhere('slug', $slug); //yang slugny sama dengan parameter $slug
}
    

}
