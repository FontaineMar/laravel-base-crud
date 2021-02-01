@extends('layouts.main')

@section('content')
<form method="POST" action="{{route('bookings.store')}}">
    @csrf
    <div class="mb-3">
      <label for="fullName" class="form-label">Nome e Cognome</label>
      <input type="text" class="form-control" id="fullName" aria-describedby="emailHelp" name="booking_full_name">
    </div>
    <div class="mb-3">
      <label for="numberCard" class="form-label">numero carta</label>
      <input type="text" class="form-control" id="numberCard" name="booking_number_card">
    </div>
    <div class="mb-3">
        <label for="numberRoom" class="form-label">Numero stanza</label>
        <input type="number" class="form-control" id="numberRoom" name="booking_room">
      </div>
      <div class="mb-3">
        <label for="In" class="form-label">Check in</label>
        <input type="text" class="form-control" id="In" name="booking_in">
      </div>
      <div class="mb-3">
        <label for="Out" class="form-label">Check out</label>
        <input type="text" class="form-control" id="Out" name="booking_out">
      </div>
      <div class="mb-3">
        <label for="details1" class="form-label">Note</label>
        <input type="text" class="form-control" id="details" name="booking_details">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection