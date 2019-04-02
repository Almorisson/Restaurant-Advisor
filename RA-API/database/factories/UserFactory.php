<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'age' => $faker->numberBetween(1, 125),
        'email' => $faker->safeEmail,
        'username' => $faker->userName,
        'password' => $faker->password, // $2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm// secret
        'userNote' => $faker->numberBetween(0, 5),
        'remember_token' => str_random(10)
    ];
});
