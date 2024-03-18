<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create([
            'password' => Hash::make('Pa$$w0rd!') 
        ]);

        for ($i = 0; $i < 20; $i++) {
            User::factory()->create([
                'password' => Hash::make('Pa$$w0rd!') 
            ]);
        }

        // Esecuzione dei seeders per le altre tabelle
        $this->call([
            AmbienteSeeder::class,
            LanguageSeeder::class,
            ProgettoSeeder::class,
            AttivitaSeeder::class
        ]);
    }
}

