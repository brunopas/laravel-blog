<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $numberOfCategories = 10;
        $numberOfPosts = 20;
        $numberOfComments = 5;

        // Admin User
        User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@larablog.com',
            'email_verified_at' => now(),
            'password' => 'password',
            'remember_token' => Str::random(10),
        ]);

        $users = User::factory($numberOfPosts)->create();
        $categories = Category::factory($numberOfCategories)->create();

        for ($i = 0; $i < $numberOfPosts; $i++) {
            $categoryRandom = $categories[rand(0, $numberOfCategories - 1)];
            $userPost = $users[$i];

            $post = Post::factory()->create([
                'user_id' => $userPost->id,
                'category_id' => $categoryRandom->id
            ]);

            for ($k = 0; $k < $numberOfComments; $k++) {
                $userRandom = $users[rand(0, $numberOfPosts - 1)];

                Comment::factory(1)->create([
                    'user_id' => $userRandom->id,
                    'post_id' => $post->id
                ]);
            }
        }
    }
}
