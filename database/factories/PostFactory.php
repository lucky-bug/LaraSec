<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'body' => $faker->text(),
        'user_id' => User::all()->random()->id,
        'status' => $faker->randomElement([
            Post::STATUS_PENDING,
            Post::STATUS_OK
        ]),
    ];
});
