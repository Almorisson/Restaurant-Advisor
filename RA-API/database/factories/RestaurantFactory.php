<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Restaurant::class, function (Faker $faker) {

    return [

        'user_id' => function () {
            return \App\User::all()->random();
        },
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'picture' => $faker->image( 'storage/app/public/', 240, 230, null, true ),
        'note' => $faker->numberBetween(0, 5),
        'phoneNumber' => $faker->phoneNumber,
        'location' => $faker->address,
        'websiteURL' => $faker->url,
        'weekTimetable' => $faker->dateTimeThisMonth('now', 'Europe/Paris'),
        'weekendTimetable' => $faker->dateTimeThisMonth('now', 'Europe/Paris')
    ];
});
