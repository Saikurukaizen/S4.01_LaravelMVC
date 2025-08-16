<?php

namespace Database\Seeders;

use App\Models\Community;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $community1 = new Community();
        $community1->fill([
            'name' => 'Tai-Chi Lovers',
            'description' => 'Un espacio para compartir y practicar Tai-Chi.',
            'user_id' => \App\Models\User::inRandomOrder()->first()?->id,
            'discipline_id' => \App\Models\Discipline::inRandomOrder()->first()?->id
        ]);
        $community1->save();

        $community2 = new Community();
        $community2->fill([
            'name' => 'Pega Pega',
            'description' => 'Grupo de boxeo',
            'user_id' => \App\Models\User::inRandomOrder()->first()?->id,
            'discipline_id' => \App\Models\Discipline::inRandomOrder()->first()?->id
        ]);
        $community2->save();

        $community3 = new Community();
        $community3->fill([
            'name' => 'Los Gymbros',
            'description' => 'Comunidad para amantes del culturismo',
            'user_id' => \App\Models\User::inRandomOrder()->first()?->id,
            'discipline_id' => \App\Models\Discipline::inRandomOrder()->first()?->id
        ]);
        $community3->save();

        Community::factory(6)->create();

    }
}
