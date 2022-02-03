<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'last_name'           => 'Admin',
                'email'  =>'admin@admin.com',
                'phone'          => '888777',
                'name'           => 'Admin',
                'address'          => 'address',
                'password'       => '$2y$10$ln2SM5n9E2gm0lewKMLtweis6GWtrVWjQ/BPe6QwMhtZWNlKZn7X2',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
