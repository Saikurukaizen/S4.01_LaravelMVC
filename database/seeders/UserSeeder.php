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
        $user->name = 'Admin';
        $user->lastname = 'Admin';
        $user->date_of_birth = '2000-08-11'; // Añade una fecha válida
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('1234');
        $user->bank_acc = 'ES123456';
        $user->discipline_id = 1;

        $user->save();

        User::factory(10)->create();
    }
}
