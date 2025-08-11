<?php

namespace Database\Seeders;

use App\Models\Discipline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $discipline1 = new Discipline();

        $discipline1->fill([
            'name' => 'Tai-Chi',
            'description' => 'Combina movimientos del kung-fu con técnicas de respiración
                            y meditación.'
        ]);
        $discipline1->save();

        $discipline2 = new Discipline();

        $discipline2->fill([
            'name' => 'Boxeo',
            'description' => 'Deporte de combate que consiste en golpear con los puños.'
        ]);
        $discipline2->save();

        $discipline3 = new Discipline();

        $discipline3->fill([
            'name' => 'Bodybuilder',
            'description' => 'Entrenamiento de fuerza para desarrollar la musculatura.'
        ]);
        $discipline3->save();

    }
}
