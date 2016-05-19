<?php

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
        DB::statement("SET foreign_key_checks=0");
        User::truncate();
        DB::table('role_user')->truncate();
        DB::statement("SET foreign_key_checks=1");

        $user           = new User;
        $user->name     = "Admin";
        $user->email    = "admin@simplifyit.com";
        $user->password = bcrypt("admin");

        $user->save();

        $user->assignRole('admin');


        $user           = new User;
        $user->name     = "User";
        $user->email    = "user@simplifyit.com";
        $user->password = bcrypt("user");

        $user->save();

        $user->assignRole('user');
    }
}
