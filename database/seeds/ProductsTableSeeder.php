<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Garage Band',
            'price' => 20.99,
            'video' => 'sample.mp4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Garage Band',
            'price' => 120,
            'video' => 'sample.mp4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
            'name' => 'Garage Band',
            'price' => 70.49,
            'video' => 'sample.mp4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}