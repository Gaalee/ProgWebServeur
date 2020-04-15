<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $post = [
            [
               'user_id'=> rand(1,2),
               'post_date'=> now(),
               'post_content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
               'post_title'=> 'Title Post n°1',
               'post_media'=> '',
               'post_status'=> 'open',
               'post_name' => 'Title Post n°1',
               'post_type' => $faker->randomElement($array = array ('Tutorial','News','Report')),
               'post_category' => $faker->randomElement($array = array ('Food','Gaming','Sport','Reading')),
            ],
            [
                'user_id'=> rand(1,2),
                'post_date'=> now(),
                'post_content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'post_title'=> 'Title Post n°2',
                'post_media'=> '',
                'post_status'=> 'open',
                'post_name' => 'Title Post n°2',
                'post_type' => $faker->randomElement($array = array ('Tutorial','News','Report')),
                'post_category' => $faker->randomElement($array = array ('Food','Gaming','Sport','Reading')),
            ],
            [
                'user_id'=> rand(1,2),
                'post_date'=> now(),
                'post_content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'post_title'=> 'Title Post n°3',
                'post_media'=> '',
                'post_status'=> 'open',
                'post_name' => 'Title Post n°3',
                'post_type' => $faker->randomElement($array = array ('Tutorial','News','Report')),
                'post_category' => $faker->randomElement($array = array ('Food','Gaming','Sport','Reading')),
            ],
        ];
  
        foreach ($post as $key => $value) {
            Post::create($value);
        }
    }
}
