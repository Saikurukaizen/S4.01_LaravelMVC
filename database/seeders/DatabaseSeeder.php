<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            DisciplineSeeder::class,
            CommunitySeeder::class,
        ]);

        //php artisan db:seed

        //Todos los registros que guardemos aquí en el Seeder, se insertará en la base de datos
        //cada vez que realizamos un comando :fresh o :refresh. Van a estar siempre.

        //Se puede combinar los comandos usando php artisan migrate:fresh --seed

        /*
        Para crear más de un usuario
        */
        
    }
}
