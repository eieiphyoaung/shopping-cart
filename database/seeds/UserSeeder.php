<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kyaw Kyaw',
            'email' => 'kyawkyaw@gmail.com',
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Zaw Zaw',
            'email' => 'zawzaw@gmail.com',
            'password' =>  bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Helen',
            'email' => 'helen@gmail.com',
            'password' =>  bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Joden',
            'email' => 'joden@gmail.com',
            'password' =>  bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Mary',
            'email' => 'mary@gmail.com',
            'password' =>  bcrypt('password')
        ]);
    }
}
