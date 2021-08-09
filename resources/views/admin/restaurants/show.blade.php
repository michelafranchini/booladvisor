@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$restaurant->name}}</h1>
        <div>
            <img src="{{asset('storage/' . $restaurant->image)}}" alt="">
        </div>
        <div>
            <h3>Indirizzo</h3>
            <h5>{{$restaurant->address}}</h5>
        </div>
        <div>
            <h3>Telefono</h3>
            <h5>{{$restaurant->phone}}</h5>
        </div>
        <div>
            <h3>Email</h3>
            <h5>{{$restaurant->email}}</h5>
        </div>
    </div>
@endsection