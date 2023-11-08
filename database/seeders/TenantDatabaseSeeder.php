<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'owner']);
        Role::create(['name'=>'hrmanager']);
        Role::create(['name'=>'client']);
        Role::create(['name'=>'nurse']);
    }
}
