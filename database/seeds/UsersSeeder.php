<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => '1',
                    'name' => 'First User',
                    'email' => 'user0@example.com',
                    'role' => '0',
                    'country_id' => '1',
                    'password' => '$2y$10$2UArmwoNtyWEqtz70B/VvOHy1XPf6wMjZXFgOAWrMN8KS0HIbWsDq',
                    'remember_token' => 'yM63KNncjRITMR19wbNhQnuBC4oCAtnbHN63KkLuh4pZYompQapGFCEHtaiR',
                    'created_at' => '2016-03-03 07:33:53',
                    'updated_at' => '2016-03-31 01:57:46',
                ),
            1 =>
                array (
                    'id' => '2',
                    'name' => 'Second User',
                    'email' => 'admin@example.com',
                    'role' => '1',
                    'country_id' => '2',
                    'password' => '$2y$10$2UArmwoNtyWEqtz70B/VvOHy1XPf6wMjZXFgOAWrMN8KS0HIbWsDq',
                    'remember_token' => 'yM63KNncjRITMR19wbNhQnuBC4oCAtnbHN63KkLuh4pZYompQapGFCEHtaiR',
                    'created_at' => '2016-03-03 07:33:53',
                    'updated_at' => '2016-03-31 01:57:46',
                ),

        ));


    }
}
