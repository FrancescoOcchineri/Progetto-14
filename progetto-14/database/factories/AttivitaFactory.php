<?php

namespace Database\Factories;

use App\Models\Attivita;
use App\Models\Progetto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttivitaFactory extends Factory
{
    protected $model = Attivita::class;

    public function definition(): array
    {
        $status = ['Pending', 'In Progress', 'Completed', 'Cancelled'];

        return [
            'title' => $this->faker->text(20),
            'description' => $this->faker->text(100),
            'progetto_id' => Progetto::get()->random()->id,           
            'status' => $status[array_rand($status)],
            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'assigned_to' => User::get()->random()->id
        ];
    }
}
