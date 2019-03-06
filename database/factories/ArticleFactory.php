<?php

use Faker\Generator as Faker;
use App\Article;
use App\Category;
use App\Kind;

$factory->define(Article::class, function (Faker $faker) {
	$idTL = Category::pluck('id');
	$idLT = Kind::pluck('id');
    return [
        'TieuDe'=> $faker->text,
        'NoiDung'=>$faker->text,
        'Image'=>$faker->imageUrl(50, 60),
        'idTL'=> $faker->randomElement($idTL),
        'idLT'=> $faker->randomElement($idLT)
    ];
});
