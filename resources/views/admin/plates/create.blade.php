@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Inserisci il nuovo piatto</h1>
        
        <form action="{{route('admin.plates.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="name">Nome piatto</label>
                <input type="text" class="form-control" id="name" placeholder="Inserisci il nome" name="name">
                @error('name')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" placeholder="Inserisci il prezzo" name="price">
                @error('price')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredienti</label>
                <input type="text" class="form-control" id="ingredients" placeholder="Inserisci gli ingredienti" name="ingredients">
                @error('ingredients')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Descrizione Piatto</label>
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
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option selected>Scegli una categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>  
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="restaurant_id">ID Ristorante</label>
                <input type="hidden" class="form-control-file" id="restaurant_id" name="restaurant_id" value="{{$id}}">
                @error('restaurant_id')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>


            <button class="btn btn-primary" type="submit" value="Submit">Crea</button>
        </form>
    </div>
@endsection