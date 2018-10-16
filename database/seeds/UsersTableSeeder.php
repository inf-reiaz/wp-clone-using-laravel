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
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // reset the users table
        DB::table('users')->truncate();
        
        

        // generate 3 users/author
        DB::table('users')->insert([
            [
                'name' => "reiaz",
                'slug' => "reiaz",
                'bio' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.",
                'email' => "reiazbubt@gmail.com",
                'password' => bcrypt('123456')
            ],
            [
                'name' => "demo",
                'slug' => "demo",
                'bio' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.",
                'email' => "demo@demo.com",
                'password' => bcrypt('123456')
            ],
            [
                'name' => "test",
                'slug' => "test",
                'bio' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.",
                'email' => "test@test.com",
                'password' => bcrypt('123456')
            ],
        ]);
        
    }
}
