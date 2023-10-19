@extends('layouts.app')

@section('main-content')
  <section class="container text-center my-3">
    <h1 class="my-5">{{ $title }}</h1>
    
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Type</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($comics as $comic)
          <tr>
            <td scope="row" >{{ $comic->id}}</td>
            <td scope="col" >{{ $comic->title}}</td>
            <td scope="col" >{{ $comic->price}}</td>
            <td scope="col" >{{ $comic->series}}</td>
            <td scope="col" >{{ $comic->sale_date}}</td>
            <td scope="col" >{{ $comic->type}}</td>
          </tr>
        @endforeach
         
        </tbody>
      </table>
    


  </section>
@endsection