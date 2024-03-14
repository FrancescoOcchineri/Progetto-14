<?php

namespace Database\Factories;

use App\Models\Ambiente;
use App\Models\Language;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Progetto>
 */
class ProgettoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['Pending', 'In Progress', 'Completed', 'Cancelled'];

        return [
            'title' => $this->faker->unique()->text(20),
            'description' => $this->faker->text(100),
            'language_id' => Language::get()->random()->id,
            'environment_id' => Ambiente::get()->random()->id,
            'team_id' => User::get()->random()->id,
            'status' => $this->faker->randomElement($status),
            'budget' => $this->faker->randomFloat(2, 100, 10000),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
