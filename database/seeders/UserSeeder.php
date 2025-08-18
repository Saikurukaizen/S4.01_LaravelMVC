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
        $user = new User();
        $user->fill([
            'name' => 'Admin',
            'lastname' => 'Admin',
            'date_of_birth' => '2000-08-11',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234'),
            'bank_acc' => 'ES123456',
            'discipline_id' => \App\Models\Discipline::first()->id,
        ]);

        $user->save();

        User::factory(10)->create();
    }
}
