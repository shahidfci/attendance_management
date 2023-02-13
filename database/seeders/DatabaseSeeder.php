<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Shahidul Islam', 
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        Student::factory()->count(20)->create();
    }
}
