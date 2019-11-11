<?php

use Cartalyst\Sentinel\Sentinel;
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
            'permission' => [
                'admin' => true
            ],
        ];

        Sentinel::getRoleRepository()->createModel()->fill($role_admin)->save();

        $adminrole = Sentinel::findRoleByName('name');

        $user_admin = ["first_name" => "M", "last_name" => "Admin", "email" => "madmin@mail.com", "password" => "12345678"];

        $adminuser = Sentinel::registerAndActivate($user_admin);

        $adminuser->role()->attach($adminrole);

        //Seed data writer
        $role_writer = [
            'slug' => 'writer',
            'name' => 'writer',
            'permission' => [
                'article.index' => true,
                'article.create' => true,
                'article.store' => true,
                'article.show' => true,
                'article.edit' => true,
                'article.update' => true,
            ],
        ];
    }
}
