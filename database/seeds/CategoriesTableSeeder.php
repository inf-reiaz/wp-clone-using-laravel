<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => "CSE",
                'slug' => "CSE",
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            [
                'id' => 2,
                'name' => "BUBT",
                'slug' => "BUBT",
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            [
                'id' => 3,
                'name' => "EEE",
                'slug' => "EEE",
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            [
                'id' => 4,
                'name' => "LLB",
                'slug' => "LLB",
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            [
                'id' => 5,
                'name' => "COMILLA",
                'slug' => "COMILLA",
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
        ]);
    }
}
