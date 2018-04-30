<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for($i = 0; $i<20; $i++){
          $title = $faker->sentence;
          $description = $faker->text(50);
          $text = $faker->text(3000);
          $video = "<iframe width='560' height='315' src='https://youtu.be/E6ucwI-NpI0' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
          $slug = Str::slug($title);
          \DB::table('articles')->insert(array(
              'title' => $title,
              'description'  => $description,
              'image'  => 'maritelas_01524719171.JPG',
              'text'  => $text,
              'video'  => $video,
              'slug'  => $slug,
              'created_at' => '2018-04-26 05:10:28',
              'updated_at' => '2018-04-26 05:10:28'
          ));
      }
    }
}
