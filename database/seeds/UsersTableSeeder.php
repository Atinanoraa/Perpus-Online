<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@cyberolympus.com',
                'password' => bcrypt('admin'),
                'account_status' => 1,
            ],
            [
                'name' => 'member',
                'email' => 'member@cyberolympus.com',
                'password' => bcrypt('member'),
                'account_status' => 4,
            ]

        ];

        User::insert($users);

    }
}
