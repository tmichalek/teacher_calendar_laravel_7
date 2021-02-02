<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Rating;
use Faker\Generator as Faker;

$factory->define(Rating::class, function (Faker $faker) {
    return [
        'id_rate'=>$faker->numberBetween(1,10),
        'id_subject'=>$faker->numberBetween(1,6),
        'id_grade'=>$faker->numberBetween(1,10),
        'id_student'=>$faker->numberBetween(1,50),
        'created_at'=>$faker->dateTimeBetween('-1 week', '+1 week'),
        'updated_at'=>$faker->dateTimeBetween('-1 week', '+1 week'),
        
    ];
});
