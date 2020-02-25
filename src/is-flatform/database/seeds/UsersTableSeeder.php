<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        if (config('app.env') === 'production' || config('app.env') === 'staging') {
            return;
        }

        $manage = User::create([
            'name' => 'Manage',
            'email' => config('app.manage.email'),
            'password' => bcrypt(config('app.manage.password'))
        ]);
        $manage->assignRole('Manage');

        $admin = User::create([
            'name' => 'Admin',
            'email' => config('app.admin.email'),
            'password' => bcrypt(config('app.admin.password'))
        ]);
        $admin->assignRole('Admin');

        $employee = User::create([
            'name' => 'Employee',
            'email' => config('app.employee.email'),
            'password' => bcrypt(config('app.employee.password'))
        ]);
        $employee->assignRole('Employee');
    }
}
