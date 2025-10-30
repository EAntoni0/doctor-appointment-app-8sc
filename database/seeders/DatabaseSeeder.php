<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
     /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //LLamar a RoleSeeder
        $this -> call([
            RoleSeeder::class,
        ]);

        //Crear un usuario de prueba cada vez que se ejecuten migraciones

        User::factory()->create([
            'name' => 'Erick Chan',
            'email' => 'ac817924@gmail.com',
            'password' => bcrypt('qwert54321'),
        ]);
    }
}
