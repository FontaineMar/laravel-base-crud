<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Booking::class, function (Faker $faker) {

    $from_date = $faker->date();
    $to_date = Carbon::parse($from_date)->add(buildingNumber )
    return [
        'guest_full_name' => $faker->name(),
        'guest_credit_card' => $faker->crediCardNumber(),
        'room' => $faker->rand ( 100, 900),
        'from_date' =>  $faker->date(),
        'to_date'=> $faker->date(),
        'more_details' => $faker->paragraph(),
        'created_at'      => Carbon::now()->toDateTimeString()
    ];
});
