<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Hashing\BcryptHasher;

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
                'name' => 'Sholeh Agung P',
                'username' => 'pras',
                'email' => 'sholehap@gmail.com',
                'password' => bcrypt('password')
            ]);
        User::factory(3)->create();
        Post::factory(25)->create();
        // 
        // User::create([
        //     'name' => 'Dodi Kurniawan',
        //     'email' => 'dodikk@example.com',
        //     'password' => bcrypt('admin123')
        //]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        // Category::create([
        //     'name' => 'Android Developer',
        //     'slug' => 'android-developer'
        // ]);
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio necessitatibus nesciunt voluptate omnis exercitationem perspiciatis numquam nostrum, quo praesentium sit magni accusantium temporibus doloribus repellendus nam porro, molestias accusamus, assumenda et obcaecati consequuntur provident laborum blanditiis! Odio excepturi eligendi deserunt mollitia at fugit incidunt labore possimus accusantium repudiandae asperiores provident eius obcaecati architecto repellat ad maiores quidem iusto ipsa commodi necessitatibus, dolorem, quaerat omnis similique? Et vero, soluta dicta necessitatibus voluptatem nobis corrupti sint dignissimos hic accusamus, est rerum eaque illum molestias iste iusto! Tempore natus, minima ex nostrum numquam fugiat. Ducimus quos magnam iste blanditiis ipsam provident quod sed!',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio necessitatibus nesciunt voluptate omnis exercitationem perspiciatis numquam nostrum, quo praesentium sit magni accusantium temporibus doloribus repellendus nam porro, molestias accusamus, assumenda et obcaecati consequuntur provident laborum blanditiis! Odio excepturi eligendi deserunt mollitia at fugit incidunt labore possimus accusantium repudiandae asperiores provident eius obcaecati architecto repellat ad maiores quidem iusto ipsa commodi necessitatibus, dolorem, quaerat omnis similique? Et vero, soluta dicta necessitatibus voluptatem nobis corrupti sint dignissimos hic accusamus, est rerum eaque illum molestias iste iusto! Tempore natus, minima ex nostrum numquam fugiat. Ducimus quos magnam iste blanditiis ipsam provident quod sed!',
            'category_id' => 1,
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio necessitatibus nesciunt voluptate omnis exercitationem perspiciatis numquam nostrum, quo praesentium sit magni accusantium temporibus doloribus repellendus nam porro, molestias accusamus, assumenda et obcaecati consequuntur provident laborum blanditiis! Odio excepturi eligendi deserunt mollitia at fugit incidunt labore possimus accusantium repudiandae asperiores provident eius obcaecati architecto repellat ad maiores quidem iusto ipsa commodi necessitatibus, dolorem, quaerat omnis similique? Et vero, soluta dicta necessitatibus voluptatem nobis corrupti sint dignissimos hic accusamus, est rerum eaque illum molestias iste iusto! Tempore natus, minima ex nostrum numquam fugiat. Ducimus quos magnam iste blanditiis ipsam provident quod sed!',
            'category_id' => 2,
            'user_id' => 3
        ]);
    }
}
