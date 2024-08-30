<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'project_name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'url' => $this->faker->url(),
        ];
    }
}
