@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$plate->name}}</h1>
        <div>
            <img src="{{asset('storage/' . $plate->image)}}" alt="">
        </div>
        <div>
            <h3>Ingredienti</h3>
            <h5>{{$plate->ingredients}}</h5>
        </div>
        <div>
            <h3>Prezzo</h3>
            <h5>{{$plate->price}}</h5>
        </div>
        <div>
            <h3>Descrizione</h3>
            <h5>{{$plate->description}}</h5>
        </div>

        <div>
            <a type="button" class="btn btn-dark" href="{{route('admin.showMenu', $plate->restaurant)}}">Torna all'elenco dei piatti</a>

            {{-- <a type="button" class="btn btn-warning" href="{{route('admin.restaurants.edit', $restaurant->id)}}">Modifica</a>

            <form action="{{route('admin.restaurants.destroy', $restaurant->id)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare il ristorante?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cancella</button>
            </form> --}}
        </div>

    </div>
@endsection