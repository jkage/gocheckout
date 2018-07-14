<?php

$factory->define(App\Models\Cart::class, function ($faker) {
    $faker = Faker\Factory::create('en_UG');
    return [
        'store_id'       => $faker->numberBetween(1, 30),
        'phone_number'   => $faker->unique()->phoneNumber,
        'is_checked_out' => $faker->randomElement([0,1]),
    ];
});
