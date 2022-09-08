<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Borrower;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Borrower::class, function (Faker $faker) {
    return [
        'step' => rand(0, 999),
        'steps' => json_encode([rand(0, 9), rand(0, 9),rand(0, 9),rand(0, 9),rand(0, 9)]),
        'login_id' => $faker->unique()->safeEmail,
        'monthly_sales' => rand(1111, 9999),
        'monthly_expenses' => rand(11111, 99999),
        'other_financing' => 1,
        'other_financing_amount' => rand(111, 999),
        'legal_business_name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'business_physical_address' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'business_physical_city' => $faker->sentence($nbWords = 1, $variableNbWords = true),
        'business_physical_province' => "ON",
        'business_physical_postal' => "da213",
        'email' => $faker->unique()->safeEmail,
        'dob' => now(),
    ];
});
