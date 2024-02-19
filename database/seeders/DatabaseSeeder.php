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
          \App\Models\User::factory(2)->create();
          \App\Models\Reports::factory(2)->create();

        //  \App\Models\User::factory()->create([
        //      'title' => 'Director Of R&C',
        //      'email' => 'r&c@upsamail.gmail.com',
        //      'first_name' => 'Alexander',
        //      'last_name' => 'Ofori',
        //      'department_unit' => 'Information Studies',
        //      'user_role' => "Conduct Biannual Tracer Studies",
        //      'user_password' => "password"
        //  ]);
    }
}
