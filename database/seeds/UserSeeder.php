<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            'password' => bcrypt('password'),
            'profile' => 'https://dummyimage.com/500x500/0000dd/fff.png&text=User',
            'type' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Zaw Zaw',
            'email' => 'zawzaw@gmail.com',
            'password' =>  bcrypt('password'),
            'profile' => 'https://dummyimage.com/500x500/0000dd/fff.png&text=User',
            'type' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Helen',
            'email' => 'helen@gmail.com',
            'password' =>  bcrypt('password'),
            'profile' => 'https://dummyimage.com/500x500/0000dd/fff.png&text=User',
            'type' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Joden',
            'email' => 'joden@gmail.com',
            'password' =>  bcrypt('password'),
            'profile' => 'https://dummyimage.com/500x500/0000dd/fff.png&text=User',
            'type' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Mary',
            'email' => 'mary@gmail.com',
            'password' =>  bcrypt('password'),
            'profile' => 'https://dummyimage.com/500x500/0000dd/fff.png&text=User',
            'type' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' =>  bcrypt('password'),
            'profile' => 'https://dummyimage.com/500x500/0000dd/fff.png&text=User',
            'type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Hello',
            'email' => 'hello@gmail.com',
            'password' =>  bcrypt('password'),
            'profile' => 'https://dummyimage.com/500x500/0000dd/fff.png&text=User',
            'type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
