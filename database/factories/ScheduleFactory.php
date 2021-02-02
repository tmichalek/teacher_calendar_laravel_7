<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Schedule;
use Faker\Generator as Faker;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        'id_days_of_week'=>$faker->numberBetween(1,5),
        'id_lesson_hour'=>$faker->numberBetween(1,7),
        'id_classroom'=>$faker->numberBetween(1,15),
        'id_grade'=>$faker->numberBetween(1,10),
        'id_teacher'=>$faker->numberBetween(1,20),
        'created_at'=>$faker->dateTimeBetween('-1 week', '+1 week'),
        'updated_at'=>$faker->dateTimeBetween('-1 week', '+1 week'),

    ];
});
