@extends('layout.main')



@section('title')

- {{$comic->title}}

@endsection



@section('content')

<div class="container py-5 text-center">

  <h1 class="mb-3">{{$comic->title}}</h1>
  <div class="mb-5">
    <a href="{{route('comics.edit', $comic)}}" class="card-link btn btn-warning">Modifica</a>
    @include('partials.form-delete')
  </div>

  <img src="{{$comic->thumb}}" class="card-img-top w-25 mb-5" alt="{{$comic->title}}">

  <p>{{$comic->description}}</p>

  <h5><strong>Prezzo: </strong>{{$comic->price}}</h5>
  <h5><strong>Serie: </strong>{{$comic->series}}</h5>
  <h5><strong>Data di uscita: </strong>{{date_format(date_create($comic->sale_date), "d/m/Y")}}</h5>
  <h5 class="text-capitalize mb-5"><strong>Categoria: </strong>{{$comic->type}}</h5>

  @php
    $artists_arr = explode(',', $comic->artists);
    $writers_arr = explode(',', $comic->writers);
  @endphp

  <ul class="list-unstyled">
    <li><strong>Artisti: </strong></li>
    @foreach ($artists_arr as $artist)
      <li>{{$artist}}</li>
    @endforeach
  </ul>

  <ul class="list-unstyled">
    <li><strong>Scrittori: </strong></li>
    @foreach ($writers_arr as $writer)
      <li>{{$writer}}</li>
    @endforeach
  </ul>

</div>

@endsection
