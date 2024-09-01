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
                'profile_summary' => "I possess strong proficiency in web technologies such as HTML, CSS, JavaScript, PHP, and MySQL, along with hands-on experience in modern frameworks like Laravel and Livewire. My professional journey includes integrating complex systems, optimizing web-based platforms, and developing user-friendly interfaces. I am a quick learner, highly motivated, and consistently seek out effective solutions to technical challenges. My work ethos is grounded in collaboration, adaptability, and a commitment to continuous improvement.",
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
                'start_date' => '2019',
                'end_date' => '2022',
                'description' => "
        <ul>
            <li>Actively participated in the Information and Communication Media division of the Student Executive Board (BEM) during the 2019/2020 and 2020/2021 periods.</li>
            <li>Responsible for managing the activities of the Student Programming Unit (PROTIC PNC) during the 2020/2021 period.</li>
            <li>Achieved 3rd place in Polytechnic Informatics Student Competition
National, innovation creation category, enhancing the polytechnic's reputation nationally.</li>
        </ul>",
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
                'description' => '
        <ul>
            <li>Coordinated with various stakeholders in the development of a system for diploma and transcript legalization.</li>
            <li>Developed an integrated system between tracer study and diploma and transcript legalization.</li>
            <li>Optimized the validity of diploma and transcript legalization through a digital web-based platform utilizing QR Codes.</li>
        </ul>',
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
                'description' => '<ul>
            <li>Coordinated the development of a student admission system for Vocational High Schools.</li>
            <li>Implemented the student registration flow within a web-based system.</li>
            <li>Developed a web-based system for the management and collection of donation boxes.</li>
            <li>Integrated the donation box management application with other subsystems into a unified microservice.</li>
            <li>Implemented microservice integration using single sign-on (SSO) mechanisms.</li>
        </ul>',
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
                'end_date' => 'Present',
                'description' => ' <ul>
            <li>Integrated the donation box management system with financial reporting and its submission.</li>
            <li>Developed an internal system to facilitate the submission and provision of aid.</li>
            <li>Integrated the overall system into a comprehensive financial report that can be tracked periodically.</li>
        </ul>',
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
                'certification_name' => '2nd Runner Up',
                'category' => 'Cipta Inovasi',
                'institution' => 'KMIPN III',
                'number' => '28/KMIPN/UD/2021',
                'description' => '<ul>
            <li>Formulated ideas and concepts in collaboration with a faculty advisor, and worked with stakeholders and community service activities.</li>
            <li>Developed a system with a beta testing method directly with the community in a specific region as a pilot project and evaluation for future system development.</li>
            <li>Prepared the proposal and necessary documents for the final presentation, successfully achieving 3rd place with the support of various parties.</li>
        </ul>',
                'expiry_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        
        DB::table('expertises')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'expertise_name' => 'Software Enginer',
                'show' => 'hidden',
                'start_date' => '2021-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        
        DB::table('expertises')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'expertise_name' => 'Fullstack Developer',
                'show' => 'hidden',
                'start_date' => '2021-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('expertises')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'expertise_name' => 'Web Developer',
                'show' => 'hidden',
                'start_date' => '2020-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('expertises')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'expertise_name' => 'Laravel Fullstack Web Developer',
                'show' => 'show',
                'start_date' => '2021-07-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);


        DB::table('projects')->insert([
            [
                'id'=> Str::uuid()->toString(),
                'user_id' => 'a8a8a8a8-1234-5678-9abc-def123456789',
                'project_name' => 'GOCAP: Gerakan Koin NU Cilacap',
                'img' => 'gocap.jpg',
                'repository' => 'https://github.com/tekotechkotech/gocap.v2',
                'url' => 'https://gocapv2.nucarecilacap.com',
                'tech' => 'PHP, JavaScript, MariaDB/MySql, Nginx, Laravel, jQuery, Bootstrap, Livewire, TCPDF',
                'description' => "
    <h4>GOCAP: Gerakan Koin NU Cilacap</h4>
    <p>
        GOCAP adalah sebuah inisiatif yang digagas oleh LAZISNU Cilacap dengan tujuan mengumpulkan dana melalui koin-koin kecil dari masyarakat untuk berbagai program kemanusiaan dan pembangunan. Program ini cukup unik karena berhasil melibatkan masyarakat secara luas, terutama warga NU di Cilacap, untuk berpartisipasi dalam kegiatan sosial dengan cara yang sangat sederhana.
    </p>
    <p>
        Apa yang membuat GOCAP begitu menarik?
    </p>
    <ul>
        <li>Digitalisasi: Salah satu keunggulan GOCAP adalah telah dilakukannya digitalisasi melalui aplikasi. Aplikasi ini memudahkan dalam pencatatan dan pengelolaan dana yang terkumpul.</li>
        <li>Efektivitas: Program ini terbukti efektif dalam mengumpulkan dana yang cukup besar. Bahkan, dalam waktu yang relatif singkat, GOCAP berhasil mengumpulkan dana ratusan juta rupiah.</li>
        <li>Dampak Sosial: Dana yang terkumpul dari GOCAP digunakan untuk berbagai program yang berdampak langsung pada kesejahteraan masyarakat, seperti membantu korban bencana, pendidikan, kesehatan, dan pemberdayaan masyarakat.</li>
    </ul>",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        
        // User::factory(2)->create();
        // Certification::factory(2)->create();
        // Education::factory(2)->create();
        // Experience::factory(3)->create();
        // Skill::factory(5)->create();
        // Project::factory(2)->create();
        // Social::factory(2)->create();
        Blog::factory(3)->create();
        // Expertise::factory(3)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
