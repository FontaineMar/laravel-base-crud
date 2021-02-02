<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\booking;
use Faker\Generator as Faker;
use Carbon\Carbon; 

$factory->define(App\booking::class, function (Faker $faker) {

    $from_date = $faker->date();
    // $to_date = Carbon::parse($from_date)->add(10 , 'day' );
    
    return [
        'guest_full_name' => $faker->name(),
        'guest_credit_card' => $faker->creditCardNumber(),
        'room' => $faker->numberBetween($min = 100, $max = 400),
        'from_date' =>  $from_date,
        'to_date'=> $faker->date(),
        'more_details' => $faker->paragraph(),
        'created_at' => Carbon::now()->toDateTimeString()
    ];
});
