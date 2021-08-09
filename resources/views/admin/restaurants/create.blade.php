@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Inserisci il nuovo ristorante</h1>
        <form action="{{route('admin.restaurants.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="name">Nome Ristorante</label>
                <input type="text" class="form-control" id="name" placeholder="Inserisci il nome" name="name">
                @error('name')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Indirizzo Ristorante</label>
                <input type="text" class="form-control" id="address" placeholder="Inserisci l'indirizzo" name="address">
                @error('address')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Telefono Ristorante</label>
                <input type="number" class="form-control" id="phone" placeholder="Inserisci il telefono" name="phone">
                @error('phone')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Indirizzo Email</label>
                <input type="email" class="form-control" id="email" placeholder="Inserisci l'indirizzo email" name="email">
            </div>
            <div class="form-group">
                <label for="timetables">Orari Ristorante</label>
                <input type="text" class="form-control" id="timetables" placeholder="Inserisci l'orario'" name="timetables">
            </div>
            <div class="form-group">
                <label for="description">Descrizione Ristorante</label>
                <textarea type="text" class="form-control" id="description" placeholder="Inserisci la descrizione" name="description" rows="6"></textarea>
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