<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' =>1,
        'title' =>$faker->sentence,
        'title' =>$faker->paragraph

    ];
});


