@extends('layouts.app')

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
  <section class="container text-center my-3">
    <h1 class="my-5">{{ $title }}</h1>
    
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Data di uscira</th>
            <th scope="col">Tipo</th>
            <th scope="col">Modifica</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($comics as $comic)
          <tr>
            <td scope="row">{{ $comic->id}}</td>
            <td scope="col">{{ $comic->title}}</td>
            <td scope="col">{{ $comic->price}}</td>
            <td scope="col">{{ $comic->series}}</td>
            <td scope="col">{{ $comic->sale_date}}</td>
            <td scope="col">{{ $comic->type}}</td>
            <td scope="col">
                <a href="{{route('comics.show', $comic)}}">
               <i class="fa-regular fa-eye"></i> </a>
            </td>
            
          </tr>
        @endforeach
         
        </tbody>
      </table>
    


  </section>
@endsection