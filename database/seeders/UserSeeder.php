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
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('1234');

        $user->save();

        $user = new User();
        $user->name = 'Guest';
        $user->email = 'guest@guest.com';
        $user->password = bcrypt('5678');

        $user->save();
    }
}
