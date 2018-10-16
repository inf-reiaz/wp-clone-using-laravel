<?php

use Illuminate\Database\Seeder;

use Faker\Factory;

class PostsTableSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the posts table
        DB::table('posts')->truncate();

        $faker = Factory::create();

        DB::table('posts')->insert([
            
            [
                'id'           => 1,
                'author_id'    => rand(1,3),
                'category_id'  => rand(1,5),
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
                'slug'         => $faker->slug(),
                'image'        => '/public/frontend/Post_Image_1.jpg',
                'view_count'   => rand(10, 15)*100,
                'published_at' => '2017-02-19 09:00:00',
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            
            [
                'id'           => 2,
                'author_id'    => rand(1,3),
                'category_id'  => rand(1,5),
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
                'slug'         => $faker->slug(),
                'image'        => '/public/frontend/Post_Image_2.jpg',
                'view_count'   => rand(10, 15)*100,
                'published_at' => '2017-03-19 09:00:00',
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            
            [
                'id'           => 3,
                'author_id'    => rand(1,3),
                'category_id'  => rand(1,5),
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
                'slug'         => $faker->slug(),
                'image'        => '/public/frontend/Post_Image_3.jpg',
                'view_count'   => rand(10, 15)*100,
                'published_at' => '2017-05-19 09:00:00',
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            
            [
                'id'           => 4,
                'author_id'    => rand(1,3),
                'category_id'  => rand(1,5),
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
                'slug'         => $faker->slug(),
                'image'        => '/public/frontend/Post_Image_1.jpg',
                'view_count'   => rand(10, 15)*100,
                'published_at' => '2017-05-16 09:00:00',
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            
            [
                'id'           => 5,
                'author_id'    => rand(1,3),
                'category_id'  => rand(1,5),
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
                'slug'         => $faker->slug(),
                'image'        => '/public/frontend/Post_Image_2.jpg',
                'view_count'   => rand(10, 15)*100,
                'published_at' => '2017-05-16 09:00:00',
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            
            [
                'id'           => 6,
                'author_id'    => rand(1,3),
                'category_id'  => rand(1,5),
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
                'slug'         => $faker->slug(),
                'image'        => '/public/frontend/Post_Image_3.jpg',
                'view_count'   => rand(10, 15)*100,
                'published_at' => '2017-05-16 09:00:00',
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            
            [
                'id'           => 7,
                'author_id'    => rand(1,3),
                'category_id'  => rand(1,5),
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
                'slug'         => $faker->slug(),
                'image'        => '/public/frontend/Post_Image_2.jpg',
                'view_count'   => rand(10, 15)*100,
                'published_at' => '2017-05-16 09:00:00',
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            
            [
                'id'           => 8,
                'author_id'    => rand(1,3),
                'category_id'  => rand(1,5),
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
                'slug'         => $faker->slug(),
                'image'        => '/public/frontend/Post_Image_1.jpg',
                'view_count'   => rand(10, 15)*100,
                'published_at' => '2017-05-16 09:00:00',
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            
            [
                'id'           => 9,
                'author_id'    => rand(1,3),
                'category_id'  => rand(1,5),
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
                'slug'         => $faker->slug(),
                'image'        => '/public/frontend/Post_Image_2.jpg',
                'view_count'   => rand(10, 15)*100,
                'published_at' => '2017-05-16 09:00:00',
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
            
            [
                'id'           => 10,
                'author_id'    => rand(1,3),
                'category_id'  => rand(1,5),
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
                'slug'         => $faker->slug(),
                'image'        => '/public/frontend/Post_Image_3.jpg',
                'view_count'   => rand(10, 15)*100,
                'published_at' => '2017-05-16 09:00:00',
                'created_at'   => '2017-02-19 09:00:00',
                'updated_at'   => '2017-02-19 09:00:00'
            ],
        ]);
        
    }
}
