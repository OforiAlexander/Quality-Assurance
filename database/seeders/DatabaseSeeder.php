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
        //   \App\Models\User::factory(20)->create();
        //   \App\Models\Reports::factory(2)->create();

         \App\Models\User::factory()->create([
             'first_name' => 'Alexander',
             'last_name' => 'Ofori',
             'email' => 'alexander.example@example.org',
             'title' => 'Director, R&C',
             'department_unit' => 'Quality Assurance',
             'role' => "admin",
             'password' => "password"
         ]);
    }
}
