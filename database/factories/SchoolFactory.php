<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name()." school",
         'user_id'=>'1',
        'notes'=>$faker->text(),
        'type'=>rand(1,2),

    ];
});
