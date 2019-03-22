<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Recipe::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'title_sm' => $faker->catchPhrase,
        'image' => 'http://placehold.it/1200x600',
        'post' => $faker->sentence(5),
        'prep' => $faker->numberBetween($min = 0, $max = 150),
        'cook' => $faker->numberBetween($min = 0, $max = 150),
        'ingredients' => $faker->sentence(10),
        'instructions' => $faker->sentence(10)
    ];
});
