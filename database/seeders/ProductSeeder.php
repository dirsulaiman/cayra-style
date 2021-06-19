<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=12; $i++) {
            DB::table('products')->insert([
                'id' => Str::uuid(),
                'name' => Str::random(5).' '.Str::random(5),
                'description' => Str::random(30),
                'price' => 100000,
            ]);
        }
    }
}
