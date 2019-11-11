<?php

// use Cartalyst\Sentinel\Sentinel;
use Illuminate\Database\Seeder;

class AuthorizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = [
            'slug' => 'admin',
            'name' => 'admin',
            'permissions' => [
                'admin' => true
            ],
        ];

        // Sentinel::getRoleRepository()->createModel()->fill($role_admin)->save();

        // $adminrole = Sentinel::findRoleByName('admin');

        $user_admin = ["first_name" => "M", "last_name" => "Admin", "email" => "madmin@mail.com", "password" => "12345678"];

        // $adminuser = Sentinel::registerAndActivate($user_admin);

        // $adminuser->roles()->attach($adminrole);

        //Seed data writer
        $role_writer = [
            'slug' => 'Writer',
            'name' => 'Writer',
            'permissions' => [
                'article.index' => true,
                'article.create' => true,
                'article.store' => true,
                'article.show' => true,
                'article.edit' => true,
                'article.update' => true,
            ],
        ];

        Sentinel::getRoleRepository()->createModel()->fill($role_writer)->save();

        $writerrole = Sentinel::findRoleByName('Writer');

        $user_writer = ['first_name' => 'Oda', 'last_name' => 'E', 'email' => 'oda@e.com', 'password' => '12345678'];

        $writeruser = Sentinel::registerAndActivate($user_writer);

        $writeruser->roles()->attach($writerrole);
    }
}
