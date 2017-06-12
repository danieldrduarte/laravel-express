<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Sabixao\User::class, function (Faker\Generator $faker) {
    return [
        'name'              => $faker->name,
        'email'             => $faker->safeEmail,
        'password'          => bcrypt(str_random(10)),
        'remember_token'    => str_random(10),
    ];
});

/**
 * Definindo uma factory da classe Post, a partir dela podemos criar dados falsos para efetuar testes no sistema.
 * factory('Sabixao\Post',1)->make()    => Popula um objetos com as informações falsas
 * factory('Sabixao\Post',1)->create()  => Popula e persiste um objetos com as informações falsas
 */
$factory->define(Sabixao\Post::class, function (Faker\Generator $faker) {
    return [
        'title'     => $faker->sentence,
        'content'   => $faker->paragraph
    ];
});

$factory->define(Sabixao\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});