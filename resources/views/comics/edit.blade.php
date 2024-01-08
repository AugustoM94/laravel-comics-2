@extends('layouts.app')
@section('content')
<section class="w-75 m-auto text-center py-5">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="text-white">
        @csrf
        @method('PUT')
        <div class="d-flex flex-column align-items-center mb-2">
            <label for="title">Titolo</label>
            <input required type="text" name="title" id="title" value="{{old ('title', $comic->title)}}" placeholder="Inserisci un titolo" class="w-25 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" value="{{old ('description', $comic->description)}}" placeholder="Inserisci una descrizione" class="w-25 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="thumb">Thumb</label>
            <input required type="text" name="thumb" id="thumb" value="{{old ('thumb', $comic->thumb)}}" placeholder="Inserisci un'immagine" class="w-25 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="price">Prezzo</label>
            <input required type="text" name="price" id="price" value="{{old ('price', $comic->price)}}" placeholder="Inserisci un prezzo" class="w-25 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="series">Serie</label>
            <input required type="text" name="series" id="series" value="{{old ('series', $comic->series)}}"  placeholder="Inserisci la serie" class="w-25 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="sale_date">Data di uscita</label>
            <input type="text" name="sale_date" id="sale_date" value="{{old ('sale_date', $comic->sale_date)}}" placeholder="aaaa-mm-gg" class="w-25 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="type">Tipo</label>
            <select  name="type" id="type" class="w-25 p-1">
                <option value="comic book" {{old('type', $comic->type == 'comic book' ? 'selected' : '')}}>comic book</option>
                <option value="graphic novel" {{old('type', $comic->type == 'graphic novel' ? 'selected' : '')}}>graphic novel</option>
            </select>
            {{-- <input required type="text" name="type" id="type" value="{{old ('type', $comic->type)}}" placeholder="Inserisci il tipo" class="w-25 p-1"> --}}
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="artists">Artista</label>
            <input type="text" name="artists" id="artists" value="{{old ('artists', $comic->artists)}}" placeholder="Inserisci gli artisti" class="w-25 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-4">
            <label for="writers">Scrittore</label>
            <input type="text" name="writers" id="writers" value="{{old ('writers', $comic->writers)}}" placeholder="Inserisci gli scrittori" class="w-25 p-1">
        </div>

        <div>
            <input type="submit" value="Invia" class="btn btn-secondary">
        </div>
     </form>
</section>
@endsection