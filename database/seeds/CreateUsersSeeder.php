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
               'name'=>'Ahmad Zainudin',
               'username'=>'ahmd',
               'password'=> bcrypt('123'),
               'role'=> 1,
               'jk'=> 'L',
               'alamat'=> 'kp',
            ],
            [
               'name'=>'Bambang sudrajat',
               'username'=>'bg',
               'password'=> bcrypt('123'),
               'role'=> 2,
               'jk'=> 'L',
               'alamat'=> 'kp',
            ],
            [
                'name'=>'ucup sunarya',
                'username'=>'ucp',
                'password'=> bcrypt('123'),
                'role'=> 3,
                'jk'=> 'L',
                'alamat'=> 'kp',
             ],
             [
                'name'=>'Ujang sulaiman',
                'username'=>'ujg',
                'password'=> bcrypt('123'),
                'role'=> 4,
                'jk'=> 'L',
                'alamat'=> 'kp',
             ],
            
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
