<?php

use Faker\Generator as Faker;

$factory->define(App\advertisement::class, function (Faker $faker) {
    return [
        'MoTa'=>$faker->text,
        'HinhAnh'=>$faker->imageUrl(50, 60)
    ];
});
