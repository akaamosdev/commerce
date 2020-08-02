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
               'action'=>'Admin',
               'email'=>'admin@ecommerce.com',
                'is_admin'=>'1',
               'password'=> bcrypt('123456'),
               'type'=>'',
               'prenom'=>'',
               'tel'=>'',
            ],
            [
               'action'=>'User',
               'email'=>'user@ecommerce.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'type'=>'',
               'prenom'=>'',
               'tel'=>'',

            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
