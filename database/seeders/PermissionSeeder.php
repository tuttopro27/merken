<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;



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
        array_push($pesrmissions_array, Permission::create(['name' => 'view_tables']));
        array_push($pesrmissions_array, Permission::create(['name' => 'view_living_room']));
        array_push($pesrmissions_array, Permission::create(['name' => 'view_ticket']));
        $WaiterRole = Role::create(['name' => 'waiter']);
        $WaiterRole->syncPermissions($pesrmissions_array);

        $userWaiter= User::create([
            'name' => $data['pablo'],
            'email' => $data['pgallegoscelis86@gmail.com'],
            'password' => Hash::make($data['tutto.1411G']),
        ]);
    }
}