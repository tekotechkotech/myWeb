<?php

use App\Livewire\Auth\Login;
use App\Livewire\Home;
use App\Livewire\User;
use App\Livewire\ABlog;
use App\Livewire\About;
use App\Livewire\ASkill;
use App\Livewire\ASocial;
use App\Livewire\AProfile;
use App\Livewire\AProject;
use App\Livewire\AEducation;
use App\Livewire\AExpertise;
use App\Livewire\AExperience;
use App\Livewire\ACertification;
use App\Livewire\Blog;
use App\Livewire\Project;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', Login::class)->name('login');

Route::get('/',Home::class)->name('home');

Route::get('/project/{id}',Project::class)->name('project');
Route::get('/blog/{id}',Blog::class)->name('blog');

Route::get('/about-me',About::class)->name('about');

// Route::middleware('auth')->group(function () {

    Route::prefix('admin')->middleware('auth')->name('a.')->group(function () {
        
        Route::get('/profile',AProfile::class)->name('profile');
        Route::get('/blog',ABlog::class)->name('blog');
        Route::get('/project',AProject::class)->name('project');
        Route::get('/certification',ACertification::class)->name('certification');
        Route::get('/education',AEducation::class)->name('education');
        Route::get('/experience',AExperience::class)->name('experience');
        Route::get('/expertise',AExpertise::class)->name('expertise');
        Route::get('/project',AProject::class)->name('project');
        Route::get('/skill',ASkill::class)->name('skill');
        Route::get('/social',ASocial::class)->name('social');

    });
// });

// php artisan make:livewire Home
// php artisan make:livewire a-Profile
// php artisan make:livewire a-Blog
// php artisan make:livewire a-Project
// php artisan make:livewire a-Certification
// php artisan make:livewire a-Education
// php artisan make:livewire a-Experience
// php artisan make:livewire a-Expertise
// php artisan make:livewire a-Project
// php artisan make:livewire a-Skill
// php artisan make:livewire a-Social