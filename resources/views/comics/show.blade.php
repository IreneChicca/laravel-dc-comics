@extends('layouts.app')

@section('main-content')
  <section class="container text-center my-3">
    <h1 class="my-5">{{ $title }} {{ $comic->title }}</h1>
    
    <div class="container border rounded py-5">
        <div class="row justify-content-center">
            <div class="col-4">

                <img src="{{ $comic->thumb}}" class="w-75">

            </div>
           <div class="col-3  my-auto">
                <p><strong>Titolo: </strong>{{ $comic->title }}</p>
                <p><strong>Serie: </strong>{{ $comic->series }}</p>
                <p><strong>Prezzo: </strong>{{ $comic->price }} € @if($comic->price <4) <span class="text-danger"> prezzo offerta!</span> @endif </p>
                <p><strong>Data di uscita: </strong>{{ $comic->sale_date }}</p>
                <p><strong>Tipo: </strong>{{ $comic->type }}</p>
                
           </div>

          
        </div>
        <div class="row justify-content-center ">
            <div class="col-7 mt-5">
            <p><strong>Descrizione: </strong>{{ $comic->description }}</p>

           </div>
        </div>
        
    </div>

  </section>
@endsection
