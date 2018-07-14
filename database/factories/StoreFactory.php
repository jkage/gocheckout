<?php

$factory->define(App\Models\Store::class, function ($faker) {
    return [
        'name'     => $faker->randomElement(['Nakumatt', 'Capital Shoppers', 'Shoprite']),
        'mtn_phone_number' => '783605145', 
        'airtel_phone_number' => '732560673', 
        'location' => $faker->randomElement(['kigali', 'Kampala', 'Nairobi']),
    ];
});
