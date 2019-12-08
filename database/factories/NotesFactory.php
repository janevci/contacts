<?php

use Faker\Generator as Faker;

$factory->define(App\Note::class, function (Faker $faker) {
    return [
        'note' => $faker->text($maxNbChars = 2000),
        'contact_id' => $faker->unique()->numberBetween($min = 1, $max = 20000),
    ];
});
