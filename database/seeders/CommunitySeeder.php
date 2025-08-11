<?php

namespace Database\Seeders;

use App\Enums\CommunityName;
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
            'name' => CommunityName::Taichi->value,
            'description' => CommunityName::Taichi->description(),
            'user_id' => 1,
            'discipline_id' => 1
        ]);
        $community1->save();

        $community2 = new Community();

        $community2->fill([
            'name' => CommunityName::Boxeo->value,
            'description' => CommunityName::Boxeo->description(),
            'user_id' => 1,
            'discipline_id' => 2
        ]);
        $community2->save();

        $community3 = new Community();

        $community3->fill([
            'name' => CommunityName::Bodybuilder->value,
            'description' => CommunityName::Bodybuilder->description(),
            'user_id' => 2,
            'discipline_id' => 3
        ]);
        $community3->save();

    }
}
