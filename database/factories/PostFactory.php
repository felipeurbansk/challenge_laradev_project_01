<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    $title = $faker->sentence('6');
    return [
        'uri' => str_slug($title),
        'title' => $title,
        'subtitle' => $faker->paragraph(1),
        'content' => $faker->paragraph(5),
        'author' => 1,
    ];
});
