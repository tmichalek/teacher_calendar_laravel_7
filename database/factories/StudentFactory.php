<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'Name'=>$faker->firstName,
        'Surname'=>$faker->lastName,
        'Number_id'=>$faker->pesel,
        'id_grade'=>$faker->randomDigitNotNull(),
        'id_user'=>$faker->numberBetween(10,60),
        //'userKind'=>$faker->randomElement(['ys','os']),// ys-younger student, os-older student
        'created_at'=>$faker->dateTimeBetween('-1 week', '+1 week'),
        'updated_at'=>$faker->dateTimeBetween('-1 week', '+1 week'),
        
    ];
});
