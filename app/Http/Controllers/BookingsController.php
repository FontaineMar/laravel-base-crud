<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BookingFormRequest;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validatore =  Validator::make(
            $request->all(),
            [
                'q' => 'bail|string|min:3'
            ]
        );
        
        if(!$validatore->fails()){
            $bookings = booking::where('guest_full_name' , 'LIKE', "%$request->q%" )->get();

        }else{
            $bookings  = booking::all();

        }
        
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingFormRequest $request)
    {
        $validate = $request->validated();
        $newBooking = new Booking();

        $newBooking->guest_full_name = $validate['booking_full_name'];
        $newBooking->guest_credit_card = $validate['booking_number_card'];
        $newBooking->room = $validate['booking_room'];
        $newBooking->from_date = $validate['booking_in'];
        $newBooking->to_date = $validate['booking_out'];
        $newBooking->more_details = $validate['booking_details'];

        $newBooking->save();
        return view('bookings.store');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking  = booking::find($id);

        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $booking  = booking::find($id);

        return view('bookings.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingFormRequest $request, $id)
    {
        $validate = $request->validated();
        $oldBooking = booking::find($id);

        $oldBooking->guest_full_name = $validate['booking_full_name'];
        $oldBooking->guest_credit_card = $validate['booking_number_card'];
        $oldBooking->room = $validate['booking_room'];
        $oldBooking->from_date = $validate['booking_in'];
        $oldBooking->to_date = $validate['booking_out'];
        $oldBooking->more_details = $validate['booking_details'];

        $oldBooking->save();

        return redirect()->route('bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
