<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\User;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Project;
use App\Models\Education;
use App\Models\Expertise;
use App\Models\Experience;
use Illuminate\Support\Str;
use App\Models\Certification;
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

        DB::table('educations')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'degree' => 'DIII',
                'major' => 'Informatical Enginering',
                'institution' => 'Politeknik Negeri Cilacap',
                'Point' => '3.55/4.0',
                'address' => 'Cilacap, Jawa Tengah, Indonesia',
                'start_date' => '2019-7-10',
                'end_date' => '2022-8-25',
                'description' => 'Anggota Badan Eksekutif Mahasiswa periode 2019-2020,2020-2021. Divisi Media dan Komunikasi<br>Juara 3 KMIPN di Malang Bidang Bisnis Inovasi, Mengangkat Aplikasi GOCAP (Gerakan Koin NU Cilacap) berbasis Web dan Android App.',
                'created_at' => '2001-01-01',
                'updated_at' => now(),
            ]
        ]);

        DB::table('experiences')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'job_title' => 'Fullstack Developer',
                'company_name' => 'Politeknik Negeri Cilacap',
                'address' => 'Cilacap, Jawa Tengah, Indonesia',
                'category' => 'Internship',
                'start_date' => '2021-07-01',
                'end_date' => '2021-12-30',
                'description' => 'Collaborate with stakeholders to understand the requirements and specifications for the employee performance target information
                    system.
                    Design and develop a user-friendly and secure web application using Laravel framework.
                    Implement functionalities for managing employee profiles, setting performance targets, tracking progress, and generating reports.
                    Increase performance tracking accuracy by 70%
                    Deploy the system to a production environment and perform ongoing maintenance and updates.
                    Provide technical support to users and troubleshoot any issues that may arise.',
                'created_at' => '2001-01-01',
                'updated_at' => now(),
            ]
        ]);

        DB::table('experiences')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'job_title' => 'Fullstack Developer',
                'company_name' => 'PT. Golet Digital Solusi',
                'address' => 'Cilacap, Jawa Tengah, Indonesia',
                'category' => 'Permanent Employee',
                'start_date' => '2022-01-01',
                'end_date' => '2023-12-30',
                'description' => 'Collaborate with stakeholders to understand the requirements and specifications for the employee performance target information
                    system.
                    Design and develop a user-friendly and secure web application using Laravel framework.
                    Implement functionalities for managing employee profiles, setting performance targets, tracking progress, and generating reports.
                    Increase performance tracking accuracy by 70%
                    Deploy the system to a production environment and perform ongoing maintenance and updates.
                    Provide technical support to users and troubleshoot any issues that may arise.',
                'created_at' => '2001-01-01',
                'updated_at' => now(),
            ]
        ]);

        DB::table('experiences')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'job_title' => 'Fullstack Developer',
                'company_name' => 'NU-CARE LAZISNU Cilacap',
                'address' => 'Cilacap, Jawa Tengah, Indonesia',
                'category' => 'Permanent Employee',
                'start_date' => '2023-01-01',
                'end_date' => 'present',
                'description' => 'Collaborate with stakeholders to understand the requirements and specifications for the employee performance target information
                    system.
                    Design and develop a user-friendly and secure web application using Laravel framework.
                    Implement functionalities for managing employee profiles, setting performance targets, tracking progress, and generating reports.
                    Increase performance tracking accuracy by 70%
                    Deploy the system to a production environment and perform ongoing maintenance and updates.
                    Provide technical support to users and troubleshoot any issues that may arise.',
                'created_at' => '2001-01-01',
                'updated_at' => now(),
            ]
        ]);

        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'HTML',
                'category' => 'Hard Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'CSS',
                'category' => 'Hard Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'MySQL',
                'category' => 'Hard Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'PHP',
                'category' => 'Hard Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Laravel',
                'category' => 'Hard Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Livewire',
                'category' => 'Hard Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Bootstrap',
                'category' => 'Hard Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Responsive Design',
                'category' => 'Hard Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'API Integration',
                'category' => 'Hard Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);

        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Communication',
                'category' => 'Soft Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Problem-Solving',
                'category' => 'Soft Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Collaboration',
                'category' => 'Soft Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Adaptability',
                'category' => 'Soft Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Time Management',
                'category' => 'Soft Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Lifelong Learning',
                'category' => 'Soft Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Visual Studio Code',
                'category' => 'Software Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Postman',
                'category' => 'Software Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'Figma',
                'category' => 'Software Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('skills')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'skill_name' => 'CLI',
                'category' => 'Software Skill',
                'proficiency' => '',
                'created_at' => '2001-01-01',
                'updated_at' => now(),

            ]
        ]);
        DB::table('certifications')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'certification_name' => 'Juara ke-3',
                'category' => 'Cipta Inovasi',
                'institution' => 'KMIPN III',
                'number' => '28/KMIPN/UD/2021',
                'description' => 'Collaborate with stakeholders to understand the requirements and specifications for the employee performance target information
                    system.
                    Design and develop a user-friendly and secure web application using Laravel framework.
                    Implement functionalities for managing employee profiles, setting performance targets, tracking progress, and generating reports.
                    Increase performance tracking accuracy by 70%
                    Deploy the system to a production environment and perform ongoing maintenance and updates.
                    Provide technical support to users and troubleshoot any issues that may arise.',
                'expiry_date' => now(),
                'created_at' => now(),
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
