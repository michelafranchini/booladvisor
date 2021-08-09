@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica ristorante</h1>
        <form action="{{route('admin.restaurants.update', $restaurant->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="name">Nome Ristorante</label>
                <input type="text" class="form-control" id="name" placeholder="Inserisci il nome" name="name" value="{{old('name', $restaurant->name)}}">
                @error('name')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Indirizzo Ristorante</label>
                <input type="text" class="form-control" id="address" placeholder="Inserisci l'indirizzo" name="address" value="{{old('address', $restaurant->address)}}">
                @error('address')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Telefono Ristorante</label>
                <input type="number" class="form-control" id="phone" placeholder="Inserisci il telefono" name="phone" value="{{old('phone', $restaurant->phone)}}">
                @error('phone')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Indirizzo Email</label>
                <input type="email" class="form-control" id="email" placeholder="Inserisci l'indirizzo email" name="email" value="{{old('email', $restaurant->email)}}">
            </div>
            <div class="form-group">
                <label for="timetables">Orari Ristorante</label>
                <input type="text" class="form-control" id="timetables" placeholder="Inserisci l'orario'" name="timetables" value="{{old('timetables', $restaurant->timetables)}}">
            </div>
            <div class="form-group">
                <label for="description">Descrizione Ristorante</label>
                <textarea type="text" class="form-control" id="description" placeholder="Inserisci la descrizione" name="description" rows="6">{{old('description', $restaurant->description)}}"</textarea>
                @error('description')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Carica l'immagine del ristorante</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit" value="Submit">Crea</button>
        </form>
    </div>
@endsection