<?php

use Faker\Generator as Faker;
use App\Article;
use App\Category;
use App\Kind;

$factory->define(Article::class, function (Faker $faker) {
	$idTL = Category::pluck('id');
	$idLT = Category::pluck('id');
    return [
        'TieuDe'=> $faker->text,
        'NoiDung'=>$faker->text,
        'HinhAnh'=>$faker->imageUrl(50, 60),
        'idTL'=> $faker->randomElement($idTL),
        'idLT'=> $faker->randomElement($idLT)
    ];
});
