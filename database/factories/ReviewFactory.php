<?php

use Faker\Generator as Faker;

$factory->define(App\model\review::class, function (Faker $faker) {
    return [
        'product_id'=> function(){
            return \App\model\product::all()->random();
        },
        'customer'=>$faker->name,
        'review'=>$faker->paragraph,
        'star'=>$faker->numberBetween(1,5)

    ];
});
