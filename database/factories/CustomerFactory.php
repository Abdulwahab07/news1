<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Customer;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'customer_full_name'=> $faker->firstName,
        'customer_address'=>$faker->address,
        'contact_number' => $faker->phoneNumber,
        'working_at' => $faker->company,
        'date_of_birth'=> $faker->dateTimeBetween('1960-01-01','2010-12-31'),
        'customer_gender'=> $faker->randomElement(['Male','Female']),
        'balance'=> mt_rand(5000,30000),
        'favoraited_contact_method'=> $faker->randomElement(['SMS','Mobile']),
    ];
});
