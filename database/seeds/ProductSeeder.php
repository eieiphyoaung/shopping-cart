<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy',
            'description' => 'Samsung Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
            'price' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Apple iPhone 12',
            'description' => 'Apple Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
            'price' => 500,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Google Pixel 2 XL',
            'description' => 'Google Pixel Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Google',
            'price' => 400,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'LG V10 H700',
            'description' => 'LG Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=LG',
            'price' => 200,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'LG V10 H800',
            'description' => 'LG Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=LG',
            'price' => 300,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'LG V10 H900',
            'description' => 'LG Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=LG',
            'price' => 400,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung Galaxy Note',
            'description' => 'Samsung Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
            'price' => 800,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Apple iPhone 7',
            'description' => 'Apple Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
            'price' => 200,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Google Pixel 2',
            'description' => 'Google Pixel Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Google',
            'price' => 500,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung Note8',
            'description' => 'Samsung Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
            'price' => 900,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Apple iPhone 6',
            'description' => 'Apple Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
            'price' => 600,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Google Pixel 4',
            'description' => 'Google Pixel Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Google',
            'price' => 900,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
