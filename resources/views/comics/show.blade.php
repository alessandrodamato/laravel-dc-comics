@extends('layout.main')



@section('title')

- {{$comic->title}}

@endsection



@section('content')

<div class="container py-5 text-center">

  <h1 class="mb-5">{{$comic->title}}</h1>

  <img src="{{$comic->thumb}}" class="card-img-top w-25 mb-5" alt="{{$comic->title}}">

  <p>{{$comic->description}}</p>

  <h5><strong>Prezzo: </strong>{{$comic->price}}</h5>
  <h5><strong>Serie: </strong>{{$comic->series}}</h5>
  <h5><strong>Data di uscita: </strong>{{date_format(date_create($comic->sale_date), "d/m/Y")}}</h5>
  <h5 class="text-capitalize mb-5"><strong>Categoria: </strong>{{$comic->type}}</h5>

  <h6><strong>Artisti: </strong>{{$comic->artists}}</h6>
  <h6><strong>Scrittori: </strong>{{$comic->writers}}</h6>

</div>

@endsection
