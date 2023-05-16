<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $permission = Permission::create(['name' => 'akses-transaksi']);
    $permission = Permission::create(['name' => 'akses-manajemen']);
    }
}
