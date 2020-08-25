<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'admin',
               'username'=>'admin',
                'title'=>'admin',
               'password'=> bcrypt('123'),
            ],
            [
               'name'=>'user',
               'username'=>'user',
                'title'=>'user',
               'password'=> bcrypt('123'),
            ],
            [
                'name'=>'supervisor',
                'username'=>'supervisor',
                 'title'=>'supervisor',
                'password'=> bcrypt('123'),
             ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
