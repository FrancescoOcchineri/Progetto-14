<?php

namespace Database\Factories;

use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    public function definition(): array
    {
        $languages = ['Java', 'Python', 'JavaScript', 'C', 'C++', 'C#', 'PHP', 'Swift', 'Ruby', 'TypeScript', 'Go', 'Kotlin', 'Rust', 'MATLAB', 'R', 'Scala', 'Perl'];
        return [
            'name' => fake()->randomElement($languages),
        ];
    }
}

