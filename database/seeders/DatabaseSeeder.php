<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
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
        \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Andrew',
            'email' => 'andrewg.mason2709@gmail.com',
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

    }
}
