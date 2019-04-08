<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Menu::class, function (Faker $faker) {
    return [
        'restaurant_id' => function () {
            return \App\Model\Restaurant::all()->random();
        },

        'user_id' => function () {
            return \App\User::all()->random();
        },

        'name' => $faker->word,
        'description' => $faker->paragraph,
        'price' => $faker->numberBetween(5, 100),
        'picture' => $faker->imageUrl(250, 300, 'food', true),
        'composition' => $faker->text,
        'menuNote' => $faker->numberBetween(0, 5)
    ];
});
