<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
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
            'skill_name' => $this->faker->word(),
            'category' => $this->faker->randomElement(['Frontend', 'Backend', 'Fullstack', 'Design', 'Data Science']),
            'proficiency' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
        ];
    }
}
