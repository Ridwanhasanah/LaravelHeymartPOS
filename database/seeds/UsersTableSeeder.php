<?php

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
        DB::table('users')->insert(array([
        	'name' => 'Daffa\' Shidqi',
        	'email' => 'daffa@gmail.com',
        	'password' => bcrypt('123456'),
        	'foto' => 'user.png',
        	'level' => 1
        ],
        [	
        	'name' => 'Annisa',
        	'email' => 'annisa@gmail.com',
        	'passowrd' => bcrypt('123456'),
        	'foto' => 'user.png',
        	'level' => 2
        ]
    ));
    }
}
