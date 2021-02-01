@extends('layouts.main')


@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nominativo</th>
        <th scope="col">Stanza</th>
        <th scope="col">check-in</th>
        <th scope="col">check-out</th>
      </tr>
    </thead>
    <tbody> 
        @foreach ($bookings as $cliente)
            <tr>
                <th scope="row">{{$cliente->id}}</th>
                <td>{{$cliente->guest_full_name}}</td>
                <td>{{$cliente->room}}</td>
                <td>{{$cliente->from_date}}</td>
                <td>{{$cliente->to_date}}</td>
                <td><a href="{{route('bookings.show' , $cliente->id)}}">Dettagli</a></td>
            </tr>
            
        @endforeach
      
     
    </tbody>
  </table>
    
@endsection