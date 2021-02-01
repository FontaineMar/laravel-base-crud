@extends('layouts.main')
@section('content')
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nominativo</th>
        <th scope="col">Numero Carta di credito</th>
        <th scope="col">Note</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{$booking->id}}</th>
            <td>{{$booking->guest_full_name}}</td>
            <td>{{$booking->guest_credit_card}}</td>
            <td>{{$booking->more_details}}</td>
        </tr>
    </tbody> 
  </table>
    
@endsection