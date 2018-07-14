<?php

$factory->define(App\Models\Item::class, function ($faker) {
    $item_names = ['cup', 'plate', 'sugar', 'soap', 'book'];
    $faker = Faker\Factory::create('en_UG');
    return [
        'name'      => $faker->randomElement($item_names),
        'barcode'   => $faker->numberBetween(100000, 500000),
        'price'     => $faker->numberBetween(1, 20) * 1000,
        'image_url' => $faker->randomElement([
                '/img/faker-items/item-001.jpg',
                '/img/faker-items/item-002.jpg',
                '/img/faker-items/item-003.jpg',
                '/img/faker-items/item-004.jpg',
                '/img/faker-items/item-005.jpg',
        ]),
    ];
});
