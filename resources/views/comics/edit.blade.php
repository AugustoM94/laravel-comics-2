@extends('layouts.app')
@section('content')
<section class="w-75 m-auto text-center py-5">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="text-white">
        @csrf
        @method('PUT')
        <div class="d-flex flex-column align-items-center mb-2">
            <label for="title">Titolo</label>
            <input required type="text" name="title" value="{{old('title',$comic->title)}}" id="title" placeholder="Inserisci un titolo" class="w-50 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description"  cols="30" rows="10" class="form-control" placeholder="Inserisci descrizione...">{{old('description',$comic->description)}}</textarea>
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="image">Image</label>
            <input  type="url" name="image" id="image" value="{{old('image',$comic->image)}}" placeholder="Inserisci un'immagine" class="w-50 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="price">Prezzo</label>
            <input  type="text" name="price" id="price" value="{{old('price',$comic->price)}}" placeholder="Inserisci un prezzo" class="w-50 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="series">Serie</label>
            <input  type="text" name="series" id="series" value="{{old('series',$comic->series)}}" placeholder="Inserisci la serie" class="w-50 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="sale_date">Data di uscita</label>
            <input type="text" name="sale_date" id="sale_date" value="{{old('sale_date',$comic->sale_date)}}" placeholder="Data di uscita" class="w-50 p-1">
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="type">Tipo</label>
            <select  name="type" id="type" class="w-25 p-1">
                <option value="comic book" value="{{old('type', $comic->type == 'comic book' ? 'selected' : '')}}">comic book</option>
                <option value="graphic novel" value="{{old('type', $comic->type == 'comic book' ? 'selected' : '')}}">graphic novel</option>
            </select>
            {{-- <input required type="text" name="type" id="type"  placeholder="Inserisci il tipo" class="w-50 p-1"> --}}
        </div>

        <div>
            <input type="submit" value="Invia" class="btn btn-secondary">
        </div>
     </form>
</section>
@endsection