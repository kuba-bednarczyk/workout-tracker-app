<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Kuba',
            'email' => 'kuba@example.com',
            'password' => bcrypt("haslo123")
        ]);

        Exercise::create([
            'name' => 'BB Squats',
            'muscle_group' => 'Legs'
        ]);

        Exercise::create([
            'name' => 'DB Chest Press',
            'muscle_group' => 'Chest'
        ]);
    }
}
