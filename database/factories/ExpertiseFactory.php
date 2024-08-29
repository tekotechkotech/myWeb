<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expertise>
 */
class ExpertiseFactory extends Factory
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
            'expertise_name' => $this->faker->sentence(),
            'start_date' => $this->faker->date(),
            'show' => $this->faker->randomElement(['show', 'hidden']),
        ];
    }
}
