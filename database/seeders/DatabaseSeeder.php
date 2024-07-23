<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;
use App\Models\SubjectGrade
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // Student::factory()->count(20)->create();
        // User::factory(10)->create();
        //Student::factory()->count(30)->create();
        SubjectGrade::factory()->count(50)->create();
        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);
    }
}
