@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>ELENCO RISTORANTI</h1>
        <a class="btn btn-primary" href="{{route('admin.restaurants.create')}}">Aggiungi Ristorante</a>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>AZIONI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($restaurants as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <a type="button" class="btn btn-success" href="{{route('admin.restaurants.show', $item->id)}}">Mostra</a>
                            </td>
                            <td>
                                <a type="button" class="btn btn-warning" href="{{route('admin.restaurants.edit', $item->id)}}">Modifica</a>
                            </td>
                            <td>
                                <form action="{{route('admin.restaurants.destroy', $item->id)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare il ristorante?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" >Cancella</button>
                                </form>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-primary">Menù</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection