@extends('layout.main')



@section('title')

- Modifica Fumetto

@endsection



@section('content')

<div class="container py-5 text-center">

  <h1 class="mb-5">Modifica {{$comic->title}}</h1>

  <div class="row">

    <div class="col-6 offset-3">

      <form action="{{route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="container-fluid">

          <div class="row">

            <div class="col-5">
              <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Titolo del fumetto" value="{{$comic->title}}">
              </div>
            </div>

            <div class="col-7">
              <div class="mb-3">
                <label for="thumb" class="form-label">Copertina</label>
                <input name="thumb" type="text" class="form-control" id="thumb" placeholder="Inserisci un URL dell'immagine di copertina" value="{{$comic->thumb}}">
              </div>
            </div>

            <div class="col-2">
              <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input name="price" type="text" class="form-control" id="price" placeholder="Prezzo" value="{{$comic->price}}">
              </div>
            </div>

            <div class="col-4">
              <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input name="series" type="text" class="form-control" id="series" placeholder="Serie" value="{{$comic->series}}">
              </div>
            </div>

            <div class="col-6">
              <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input name="sale_date" type="text" class="form-control" id="sale_date" placeholder="Data di uscita" value="{{$comic->sale_date}}">
              </div>
            </div>

            <div class="col-12">
              <div class="mb-3">
                <label for="type" class="form-label">Categoria</label>
                <input name="type" type="text" class="form-control" id="type" placeholder="Categoria" value="{{$comic->type}}">
              </div>
            </div>

            <div class="col-12">
              <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input name="artists" type="text" class="form-control" id="artists" placeholder="Inserisci uno o più artisti, separati da una virgola" value="{{$comic->artists}}">
              </div>
            </div>

            <div class="col-12">
              <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input name="writers" type="text" class="form-control" id="writers" placeholder="Inserisci uno o più scrittori, separati da una virgola" value="{{$comic->writers}}">
              </div>
            </div>

            <div class="col-12">
              <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" class="form-control" id="description" rows="8">{{$comic->description}}</textarea>
              </div>
            </div>

            <div class="col-12">
              <div class="mb-3 float-end">
                <button type="reset" class="btn btn-warning">Svuota</button>
                <button type="submit" class="btn btn-primary ms-3">Aggiorna</button>
              </div>
            </div>

          </div>

        </div>

      </form>

    </div>

  </div>

</div>

@endsection
