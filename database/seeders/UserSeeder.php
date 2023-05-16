<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'=>'Admin Role',
            'email'=>'admin@role.test',
            'password'=>bcrypt('12345678')
        ]);

        $admin->assignRole('Admin');

        $user = User::create([
            'name'=>'User Role',
            'email'=>'user@role.test',
            'password'=>bcrypt('12345678')
        ]);

        $admin->assignRole('Pegawai');
    }
}
