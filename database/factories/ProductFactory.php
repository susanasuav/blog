<?php

use Faker\Generator as Faker;
use App\Product;
//farem ús de factories per multiplicar el codi moltes vegades
//farem servir php artisan make:factory ProductFactory
$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'description'=> $faker->sentence(10),
        'long_description'=>$faker->text,
        'price' =>$faker->randomFloat(2,5,150)
    ];
});
