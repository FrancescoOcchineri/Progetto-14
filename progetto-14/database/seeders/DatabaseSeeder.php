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
        // Creazione di un utente admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('Pa$$w0rd!')
        ]);

        // Esecuzione dei seeders per le altre tabelle
        $this->call([
            AmbienteSeeder::class,
            LanguageSeeder::class,
            ProgettoSeeder::class,
            AttivitaSeeder::class
        ]);
    }
}

