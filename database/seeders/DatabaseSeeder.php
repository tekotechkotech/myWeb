<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\User;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Project;
use App\Models\Expertise;
use App\Models\Experience;
use App\Models\Certification;
use App\Models\Education;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'name' => 'Faiz Abdul Ghoni',
                'email' => 'faizzzzz571@gmail.com',
                'email_verified_at' => now(),
                'phone' => '123-456-7890',
                'web' => 'http://faiz-ag.com',
                'address' => 'Widarapayung Wetan, Binangun, Cilacap - 52381',
                'profile_summary' => 'A Fullstack Developer with over 2 years of experience in creating fullstack web developer with laravel. Proficient in web technologies including HTML, CSS, and JavaScript, PHP, MySQL with experience in modern frameworks and libraries such as Laravel and Livewire. Additionally, I am a quick learner and highly motivated, consistently aiming to enhance my skills and find efficient, effective solutions to complex technical challenges.',
                'photo' => 'john_doe.jpg',
                'password' => Hash::make('password123'), // Jangan lupa menggunakan Hash::make untuk enkripsi password
                'created_at' => '2001-01-01',
                'updated_at' => now(),
            ]
        ]);
        User::factory(2)->create();
        Certification::factory(2)->create();
        Education::factory(2)->create();
        Experience::factory(3)->create();
        Skill::factory(5)->create();
        Project::factory(2)->create();
        Social::factory(2)->create();
        Blog::factory(3)->create();
        Expertise::factory(3)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
