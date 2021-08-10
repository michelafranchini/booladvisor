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

        <div>
            <a type="button" class="btn btn-dark" href="{{route('admin.restaurants.index')}}">Torna all'elenco</a>

            <a type="button" class="btn btn-warning" href="{{route('admin.restaurants.edit', $restaurant->id)}}">Modifica</a>

            <form action="{{route('admin.restaurants.destroy', $restaurant->id)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare il ristorante?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cancella</button>
            </form>
        </div>
    </div>
@endsection