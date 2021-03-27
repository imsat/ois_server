<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BankAccount;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(BankAccount::class, function (Faker $faker) {
    return [
        'financial_organization_id' => mt_rand(1, 10),
        'store_id' => mt_rand(50, 100),
        'account_name' => $faker->name,
        'account_no' => $faker->numberBetween(999, 9999),
        'branch' => $faker->city,
        'account_type' => mt_rand(1, 3),
        'swift_code' => Str::random(25),
        'route_no' => $faker->randomNumber(5),
    ];
});
