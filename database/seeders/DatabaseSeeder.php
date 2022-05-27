<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory(1)->create([
            'name' => 'Admin',
            'email' => 'Admin@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('LeagueofLegends'), // password
        ]);
        $this->call(PostSeeder::class);
    }
}
