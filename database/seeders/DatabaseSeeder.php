<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call([
            UsersTableSeeder::class,
            PostsTableSeeder::class
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(iSeedUsersTableSeeder::class);
        // $this->call(iSeedPostsTableSeeder::class);
        // $this->call(iSeed2UsersTableSeeder::class);
        // $this->call(iSeed2PostsTableSeeder::class);
    }
}