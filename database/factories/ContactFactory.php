<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
        'address' => $faker->address,
        'city' => $faker->city,
        'zip' => $faker->numberBetween($min = 1000, $max = 9999),
        'country' => $faker->country,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'group_id' => $faker->numberBetween($min = 1, $max = 5),
        // 'notes' => $faker->text($maxNbChars = 2000) 
    ];
});
