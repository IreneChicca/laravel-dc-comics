@extends('layouts.app')

@section('main-content')
  <section class="container text-center my-3">
    <h4 class="my-5">{{ $title }}</h4>
    <div class="my-5">
        <a href="{{route('comics.index')}}" class="btn btn-dark" >Torna alla lista</a>

        
    </div>
  </section>
@endsection
