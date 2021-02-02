@extends('layouts.main')

@section('content')
<form method="POST" action="{{route('bookings.update',$booking['id'])}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label">Nome e Cognome</label>
      <input type="text" class="form-control"  name="booking_full_name" value="{{ $booking['guest_full_name'] }}">
      @error('booking_full_name')
          <h6>
            Inserire un nome valido
          </h6>
      @enderror
    </div>
    <div class="mb-3">
      <label for="numberCard" class="form-label">numero carta</label>
      <input type="text" class="form-control"  name="booking_number_card" value="{{ $booking['guest_credit_card'] }}">
      @error('booking_number_card')
      <h6>
        Inserire una carta di credito valida
      </h6>
      @enderror
    </div>
    <div class="mb-3">
        <label for="numberRoom" class="form-label">Numero stanza</label>
        <input type="number" class="form-control"  name="booking_room" value="{{ $booking['room'] }}">
        @error('booking_room')
        <h6>
          Inserire una stanza valida
        </h6>
        @enderror
      </div>
      <div class="mb-3">
        <label for="In" class="form-label">Check in</label>
        <input type="text" class="form-control"  name="booking_in" value="{{ $booking['from_date'] }}">
        @error('booking_in')
        <h6>
          Inserire una data valida
        </h6>
        @enderror
      </div>
      <div class="mb-3">
        <label for="Out" class="form-label">Check out</label>
        <input type="text" class="form-control"  name="booking_out" value="{{ $booking['to_date'] }}">
        @error('booking_out')
        <h6>
          Inserire una stanza valida
        </h6>
        @enderror
      </div>
      <div class="mb-3">
        <label for="details" class="form-label">Note</label>
        <input type="text" class="form-control"  name="booking_details" value="{{ $booking['more_details'] }}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection