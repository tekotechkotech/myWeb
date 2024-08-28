<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $a = User::first()->id;
        return [
            'id' => Str::uuid(),
            'user_id' => $a,
            'degree' => $this->faker->randomElement(['Bachelor', 'Master', 'PhD', 'Associate']),
            'institution' => $this->faker->randomElement([
                'Harvard University',
                'Stanford University',
                'MIT',
                'University of Oxford',
                'Cambridge University',
                'Yale University',
                'Princeton University',
                'University of California, Berkeley',
            ]),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date('Y-m-d', 'now'),
            'description' => $this->faker->paragraph(),
        ];
    }
}
