<?php
use App\ToDoModel;
use Faker\Generator as Faker;

$factory->define(ToDoModel::class, function (Faker $faker) {
    return [
            'name'=>$faker->sentence(3),
            'description'=>$faker->paragraph(4),
            'completed'=>false
    ];
});
