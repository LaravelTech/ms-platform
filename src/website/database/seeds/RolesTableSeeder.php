<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['id' => User::MANAGE_ROLE_ID, 'name' => 'Manage']);
        Role::create(['id' => User::ADMIN_ROLE_ID, 'name' => 'Admin']);
        Role::create(['id' => User::EMPLOYEE_ROLE_ID, 'name' => 'Employee']);
    }
}
