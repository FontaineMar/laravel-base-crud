<?php

use Illuminate\Database\Seeder;


use App\Booking;

class bookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Booking::class, 200)->create()->each()
        
    }
}
