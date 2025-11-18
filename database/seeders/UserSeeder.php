<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //Crear un usuario de prueba cada vez que se ejecuten migraciones

        User::factory()->create([
            'name' => 'Erick Chan',
            'email' => 'ac817924@gmail.com',
            'password' => bcrypt('qwert54321'),
            'id_number' => "123456789",
            'phone' => "9999999999",
            'address' => "Calle 22, Colonia Centro",// Asignar el ID del rol correspondiente
        ]) ->assignRole('Doctor');

         User::factory()->create([
            'name' => 'Antonio Chan',
            'email' => 'ec817924@gmail.com',
            'password' => bcrypt('qwert54321'),
            'id_number' => "987654321",
            'phone' => "9997212199",
            'address' => "Calle 30, Colonia San Juan",// Asignar el ID del rol correspondiente
        ]) ->assignRole('Paciente');
        
    }
}
