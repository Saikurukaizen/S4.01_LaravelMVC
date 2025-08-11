<?php

namespace Database\Seeders;

use App\Enums\DisciplineName;
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
            'name' => DisciplineName::Taichi->value,
            'description' => DisciplineName::Taichi->description(),
        ]);
        $discipline1->save();

        $discipline2 = new Discipline();

        $discipline2->fill([
            'name' => DisciplineName::Boxeo->value,
            'description' => DisciplineName::Boxeo->description()
        ]);
        $discipline2->save();

        $discipline3 = new Discipline();

        $discipline3->fill([
            'name' => DisciplineName::Bodybuilder->value,
            'description' => DisciplineName::Bodybuilder->description()
        ]);
        $discipline3->save();

    }
}
