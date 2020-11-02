<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesrmissions_array=[];
        array_push($pesrmissions_array, Permission::create(['name' => 'view_menu']));
        array_push($pesrmissions_array, Permission::create(['name' => 'view_commands']));
        array_push($pesrmissions_array, Permission::create(['name' => 'edit articles']));
        array_push($pesrmissions_array, Permission::create(['name' => 'edit articles']));
        array_push($pesrmissions_array, Permission::create(['name' => 'edit articles']));
        array_push($pesrmissions_array, Permission::create(['name' => 'edit articles']));
        $role = Role::create(['name' => 'writer']);
        
    }
}