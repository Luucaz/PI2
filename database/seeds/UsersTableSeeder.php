<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $professorRole = Role::where('name', 'professor')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@faculdade.com',
            'password' => bcrypt('admin')
        ]);

        $professor = User::create([
             'name' => 'Professor',
             'email' => 'professor@faculdade.com',
             'password' => bcrypt('professor')
        ]);

        $user = User::create([
              'name' => 'User',
              'email' => 'user@faculdade.com',
              'password' => bcrypt('user')
        ]);


        $admin->roles()->attach($adminRole);
        $professor->roles()->attach($professorRole);
        $user->roles()->attach($userRole);
    }
}
