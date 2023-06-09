<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
        \App\Models\Tags::factory(10)->create();
        // \App\Models\Post::factory(50)->create();
        // \App\Models\Comments::factory(50)->create();
        // \App\Models\User::factory(10)->create();
    }
}
