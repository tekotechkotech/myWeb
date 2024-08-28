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

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
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
