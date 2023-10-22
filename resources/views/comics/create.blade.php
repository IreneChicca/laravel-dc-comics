@extends('layouts.app')

@section('main-content')
  <section class="container text-center my-3">
    <h4 class="my-5">{{ $title }}</h4>
    <div class="my-5">
        <a href="{{route('comics.index')}}" class="btn btn-dark" >Torna alla lista</a>

        
            @if ($errors->any())
            
            <div class="alert alert-danger w-50 m-auto my-5">
                <h6>Correggi i seguenti errori:</h6>
                
                @foreach ($errors->all() as $error)
                   <p>&#8226; {{$error }}</p>  
                @endforeach
                
            </div> 

            @endif

        

        <form action="{{ route('comics.store') }}" method="POST" class="my-5">
            @csrf
            <div class="container my-5">
            <div class="row justify-content-center">
            <div class="col-6">
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                @error('title')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                

            </div>
        
            <div class="col-6">
                <label for="series">Serie</label>
                <input type="text" id="series" name="series" class="form-control @error('series') is-invalid @enderror">
                @error('series')
                <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            </div>
            </div>

            {{-- da modificare tipo di input inserire un tipo per i prezzi --}}
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-4 ">
                    <label for="price">Prezzo</label>
                    <input type="text" id="price" name="price" class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                </div>
            {{-- da modificare tipo di input inserire un tipo per le date --}}
                <div class="col-4 ">
                    <label for="sale_date">Anno di uscita</label>
                    <input type="text" id="sale_date" name="sale_date" class="form-control @error('sale_date') is-invalid @enderror">
                    @error('sale_date')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                </div>

                <div class="col-4 ">
                    <label for="type">Tipo</label>
                    <input type="text" id="type" name="type" class="form-control @error('type') is-invalid @enderror">
                    @error('type')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-7">
                    <label for="thumb">Immagine</label>
                    <input type="text" id="thumb" name="thumb" class="form-control @error('thumb') is-invalid @enderror">
                    @error('thumb')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                </div>

            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-7">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3"></textarea>
                    @error('description')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                </div>

            </div>
        </div>

        <button class="btn btn-dark">Salva</button>


        </form>
    </div>
  </section>
@endsection
