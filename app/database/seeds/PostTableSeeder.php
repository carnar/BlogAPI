<?php 

use Faker\Factory as Faker;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Post::create([
                'title' => $faker->sentence(5),
                'content' => $faker->paragraph(5)
            ]);
        }        
    }    
}