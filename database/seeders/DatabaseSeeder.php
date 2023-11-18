<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::truncate();
        // Category::truncate();
        // Post::truncate();
            
        Post::factory(5)->create();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal'
        // ]);

        // $work = Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);

        // $music = Category::create([
        //     'name'=>'Music',
        //     'slug'=>'music'
        // ]);


        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'Personal post',
        //     'slug' => 'personal',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi voluptates commodi repellat nostrum inventore neque possimus ratione suscipit numquam necessitatibus.</p>'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'Work post',
        //     'slug' => 'work',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi voluptates commodi repellat nostrum inventore neque possimus ratione suscipit numquam necessitatibus.</p>'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $music->id,
        //     'title' => 'Music post',
        //     'slug' => 'Music',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi voluptates commodi repellat nostrum inventore neque possimus ratione suscipit numquam necessitatibus.</p>'
        // ]);
    }
};
