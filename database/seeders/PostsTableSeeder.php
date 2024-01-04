<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('posts')->truncate();

        // Method #1
        // Post::factory(30)->create();

        // Method #2
        // $users = User::All();
        // foreach ($users as $user) {
        //     // create a 3 posts for each user
        //     for ($i = 0; $i < 3; $i++) {
        //         Post::factory()->create([
        //             'user_id' => $user->id
        //         ]);
        //     }
        // }

        // Method #3
        $users = User::All();
        foreach ($users as $user) {
            // generate a random number between 1 & 4
            $post_count = rand(1, 4);
            for ($i = 0; $i < $post_count; $i++) {
                Post::factory()->create([
                    'user_id' => $user->id
                ]);
            }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
