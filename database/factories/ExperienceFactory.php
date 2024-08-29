<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $a = User::orderBy('created_at','ASC')->first()->id;
        return [
            'id' => Str::uuid(),
            'user_id' => $a,
            'job_title' => $this->faker->jobTitle(),
            'company_name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'category' => $this->faker->randomElement(['Frontend', 'Backend', 'Fullstack', 'Design', 'Data Science']),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date('Y-m-d', 'now'),
            'description' => $this->faker->paragraph(),
        ];
    }
}
