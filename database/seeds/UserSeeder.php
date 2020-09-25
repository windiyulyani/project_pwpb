<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= User::create([
        	'name' => 'Admin Role',
        	'email' => 'admin@Role.test',
        	'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

         $user= User::create([
        	'name' => 'User Role',
        	'email' => 'user@Role.test',
        	'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('user');
    }
}
