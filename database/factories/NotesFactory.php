<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Note::class, function (Faker $faker) {
    return [
        'title' => ($faker->sentence(rand(1, 3))),
        'body' => rtrim($faker->text()),

    ];
});