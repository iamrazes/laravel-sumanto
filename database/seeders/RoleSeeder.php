<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = Role::create([
            'name'=>'Admin'


        ]);

        $pegawai = Role::create([
            'name'=>'Pegawai'

        ]);

        $admin->syncPermissions(['akses-manajemen', 'akses-transaksi' ]);
        $pegawai->syncPermissions(['akses-transaksi']);
    }
}
