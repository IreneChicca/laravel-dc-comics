@extends('layouts.app')

@section('main-content')
  <section class="container text-center my-3">
    <h4 class="my-5">{{ $title }}</h4>
    <div class="my-5">
        <a href="{{route('comics.index')}}" class="btn btn-dark" >Torna alla lista</a>

        <form action="{{ route('comics.store') }}" method="POST" class="my-5">
            @csrf
            <div class="container my-5">
            <div class="row justify-content-center">
            <div class="col-6">
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
        
            <div class="col-6">
                <label for="series">Serie</label>
                <input type="text" id="series" name="series" class="form-control">
            </div>
            </div>

            {{-- da modificare tipo di input inserire un tipo per i prezzi --}}
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-4 ">
                    <label for="price">Prezzo</label>
                    <input type="text" id="price" name="price" class="form-control">
                </div>
            {{-- da modificare tipo di input inserire un tipo per le date --}}
                <div class="col-4 ">
                    <label for="sale_date">Anno di uscita</label>
                    <input type="text" id="sale_date" name="sale_date" class="form-control">
                </div>

                <div class="col-4 ">
                    <label for="type">Tipo</label>
                    <input type="text" id="type" name="type" class="form-control">
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-7">
                    <label for="thumb">Immagine</label>
                    <input type="text" id="thumb" name="thumb" class="form-control">
                </div>

            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-7">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

            </div>
        </div>

        <button class="btn btn-dark">Salva</button>


        </form>
    </div>
  </section>
@endsection
