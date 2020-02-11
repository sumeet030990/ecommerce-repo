<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            'name' => 'beer',
            'slug' => 'beer',
            ],[
            'name' => 'wine',
            'slug' => 'wine',
            ],[
            'name' => 'soft drink',
            'slug' => 'soft-drink',
            ],[
            'name' => 'mocktail',
            'slug' => 'mocktail',
            ]
        ]);
    }
}
