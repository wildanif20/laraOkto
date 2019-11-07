<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name','employee')->first();
        $role_manager = Role::where('name','manager')->first();
            $employee = new User();
            $employee->name = 'Employee Name';
            $employee->email = 'Employee@example.com';
            $employee->password = bcrypt('secret');
            $employee->save();
            $employee->roles()->attach($role_employee);
            $employee = new User();
            $employee->name = 'Manager Name';
            $employee->email = 'Manager@example.com';
            $employee->password = bcrypt('secret');
            $employee->save();
            $employee->roles()->attach($role_manager);
    }
}
