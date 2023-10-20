@extends('layouts.app')

@section('main-content')
  <section class="container text-center my-3">
    <h1 class="my-5">{{ $title }}</h1>
    

    <div class="my-5">
        <a href="{{route('comics.show', $comic)}}" class="btn btn-dark" >Mostra dettagli</a>
  
    </div>
    <form action="{{ route('comics.update', $comic) }}" method="POST" class="my-5">
        @csrf
        @method('PUT')
        <div class="container my-5">
        <div class="row justify-content-center">
        <div class="col-6">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $comic->title}}">
        </div>
    
        <div class="col-6">
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" class="form-control" value="{{ $comic->series}}">
        </div>
        </div>

        {{-- da modificare tipo di input inserire un tipo per i prezzi --}}
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-4 ">
                <label for="price">Prezzo</label>
                <input type="text" id="price" name="price" class="form-control" value="{{ $comic->price}}">
            </div>
        {{-- da modificare tipo di input inserire un tipo per le date --}}
            <div class="col-4 ">
                <label for="sale_date">Anno di uscita</label>
                <input type="text" id="sale_date" name="sale_date" class="form-control" value="{{ $comic->sale_date}}">
            </div>

            <div class="col-4 ">
                <label for="type">Tipo</label>
                <input type="text" id="type" name="type" class="form-control" value="{{ $comic->type}}">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-7">
                <label for="thumb">Immagine</label>
                <input type="text" id="thumb" name="thumb" class="form-control" value="{{ $comic->thumb}}">
            </div>

        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-7">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"  ></textarea>
            </div>

        </div>
    </div>

    <button class="btn btn-dark">Salva</button>


    </form>


  </section>
@endsection
