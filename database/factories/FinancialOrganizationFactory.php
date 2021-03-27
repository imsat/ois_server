<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FinancialOrganization;
use Faker\Generator as Faker;

$factory->define(FinancialOrganization::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'short_name' => $faker->companySuffix,
        'address' => $faker->address,
    ];
});
