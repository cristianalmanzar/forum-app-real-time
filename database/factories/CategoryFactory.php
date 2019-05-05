<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Category::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'name' => ucfirst($word),
        'slug' => str_slug($word)
    ];
});
