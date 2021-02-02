<?php

use Illuminate\Database\Seeder;
use App\booking;

class bookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\booking::class, 200)->create()->each(function ($el){
            $el->save();
        });
        
    }
}
