<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Classroom;
use Faker\Generator as Faker;

$factory->define(Classroom::class, function (Faker $faker) {
    return [
        'Classroom_number'=>$faker->numberBetween(1,200),
        'created_at'=>$faker->dateTimeBetween('-1 week', '+1 week'),
        'updated_at'=>$faker->dateTimeBetween('-1 week', '+1 week'),
    ];
});
