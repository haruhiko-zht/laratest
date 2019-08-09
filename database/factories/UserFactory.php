<?php

use App\Post;
use App\Photo;
use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(Post::class, function (Faker $faker) {
	return [
		'user_id' => 1,
		'title' => $faker->sentence(6, true),
		'body' => $faker->text(200),
	];
});

$factory->define(Photo::class, function (Faker $faker) {
	return [
		'post_id' => $faker->numberBetween(1,10),
		'path' => $faker->word.'.jpg',
	];
});