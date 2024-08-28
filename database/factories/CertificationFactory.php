<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certification>
 */
class CertificationFactory extends Factory
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
            'certification_name' => $this->faker->sentence(),
            'institution' => $this->faker->company(),
            'issue_date' => $this->faker->date(),
            'expiry_date' =>  $this->faker->date('Y-m-d', 'now'),
        ];
    }
}
