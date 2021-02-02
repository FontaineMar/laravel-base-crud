<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'booking_full_name' => 'required|string|min:4',
            'booking_number_card' => 'required|string|min:4',
            'booking_room' => 'required|numeric|min:100',
            'booking_in' => 'required|string',
            'booking_out' => 'required|string',
            'booking_details' => 'string'
        ];
    }
}
