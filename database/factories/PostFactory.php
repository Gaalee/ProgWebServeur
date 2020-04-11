<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_title' => $faker->text(10),
        'user_id' => rand(1,9),
        'post_date' => now(),
        'post_content' => $faker->text,
        'post_status' => $faker->text(20),
        'post_name' => $faker->text(15),
        'post_type' => $faker->text(20),
        'post_category' => $faker->text(20),
    ];
});
