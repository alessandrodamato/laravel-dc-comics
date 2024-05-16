@extends('layout.main')



@section('title')

- I nostri Fumetti

@endsection



@section('content')

<div class="container py-5 text-center">

  <h1 class="mb-5">I nostri Fumetti</h1>

  <div class="row">

    @forelse ($data as $comic)
    <div class="col-3">
      <div class="card mb-5 p-3" style="width: 18rem; height: 800px">
        <img src="{{$comic->thumb}}" class="card-img-top w-100 h-100 object-fit-cover" alt="{{$comic->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Prezzo: </strong>{{$comic->price}}</li>
          <li class="list-group-item"><strong>Serie: </strong>{{$comic->series}}</li>
          <li class="list-group-item"><strong>Data di uscita: </strong>{{$comic->sale_date}}</li>
          <li class="list-group-item text-capitalize"><strong>Categoria: </strong>{{$comic->type}}</li>
        </ul>
        <div class="card-body">
          <a href="{{route('comics.show', $comic)}}" class="card-link btn btn-success">Vedi dettagli</a>
        </div>
      </div>
    </div>
    @empty
      <h4>Nessun risultato trovato</h4>
    @endforelse

  </div>

</div>

@endsection
