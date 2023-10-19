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
                <label for="titolo">Titolo</label>
                <input type="text" id="titolo" name="titolo" class="form-control">
            </div>
        
            <div class="col-6">
                <label for="serie">Serie</label>
                <input type="text" id="serie" name="serie" class="form-control">
            </div>
            </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-4 ">
                    <label for="prezzo">Prezzo</label>
                    <input type="text" id="prezzo" name="prezzo" class="form-control">
                </div>

                <div class="col-4 ">
                    <label for="anno">Anno di uscita</label>
                    <input type="text" id="anno" name="anno" class="form-control">
                </div>

                <div class="col-4 ">
                    <label for="tipo">Tipo</label>
                    <input type="text" id="tipo" name="tipo" class="form-control">
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-7">
                    <label for="img">Immagine</label>
                    <input type="text" id="img" name="img" class="form-control">
                </div>

            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-7">
                    <label for="desc" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>

            </div>
        </div>

        <button class="btn btn-dark">Salva</button>


        </form>
    </div>
  </section>
@endsection
