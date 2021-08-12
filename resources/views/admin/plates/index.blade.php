@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>ELENCO PIATTI</h1>
        {{-- @dd($restaurant) --}}
        <a class="btn btn-primary" href="{{route('admin.plates.create', $restaurant)}}">Aggiungi Un piatto</a>
        <div>
            <table class="table table-striped my-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>AZIONI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plates as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <a type="button" class="btn btn-success" href="{{route('admin.plates.show', $item)}}">Mostra</a>
                            </td>
                            <td>
                                <a type="button" class="btn btn-warning" href="{{route('admin.plates.edit', $item)}}">Modifica</a>
                            </td>
                            <td>
                                <form action="{{route('admin.plates.destroy', $item)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare il piatto?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" >Cancella</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection