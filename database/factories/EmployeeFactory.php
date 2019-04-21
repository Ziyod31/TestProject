<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Company;
use App\Employee;
use Illuminate\Http\Request;

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

$factory->define(\App\Company::class, function (Faker $faker, $request) {
	
	return [
		'name' => $faker->name,
		'email' => $faker->email,
		'website' => $faker->url,
		'logo' => $faker->image('public/storage/images'),
	];
});

$factory->define(\App\Employee::class, function (Faker $faker) {
	return [
		'firstname' => $faker->firstname,
		'lastname' => $faker->lastname,
		'email' => $faker->email,
		'phone' => $faker->phoneNumber,
		'company_id' => factory(App\Company::class)->create()->id,
	];
});

