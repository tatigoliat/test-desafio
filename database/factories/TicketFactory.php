<?php
use App\Ticket;
use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
        'description' => $faker->test($maxNbChars = 10),
        'id_user' => $faker->randomDigitNotNull,
    ];
});
