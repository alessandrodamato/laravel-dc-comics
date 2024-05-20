@extends('layout.main')



@section('title')

- Modifica Fumetto

@endsection



@section('content')

<div class="container py-5 text-center">

  <h1 class="mb-3">Modifica {{$comic->title}} @include('partials.form-delete')</h1>

  @if($errors->any())
    <div class="alert alert-danger text-start " role="alert">
      <ul class="m-0">
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

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
                <input
                  name="title"
                  type="text"
                  class="form-control @error('title') is-invalid @enderror"
                  id="title"
                  placeholder="Titolo del fumetto"
                  value="{{old('title', $comic->title)}}"
                >
                @error('title')
                  <div class="text-danger my-1" style="font-size: .8rem">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-7">
              <div class="mb-3">
                <label for="thumb" class="form-label">Copertina</label>
                <input
                  name="thumb"
                  type="text"
                  class="form-control @error('thumb') is-invalid @enderror"
                  id="thumb"
                  placeholder="Inserisci un URL dell'immagine di copertina"
                  value="{{old('thumb', $comic->thumb)}}"
                >
                @error('thumb')
                  <div class="text-danger my-1" style="font-size: .8rem">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-3">
              <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input
                  name="price"
                  type="text"
                  class="form-control @error('price') is-invalid @enderror"
                  id="price"
                  placeholder="Prezzo"
                  value="{{old('price', $comic->price)}}"
                >
                @error('price')
                  <div class="text-danger my-1" style="font-size: .8rem">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-4">
              <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input
                  name="series"
                  type="text"
                  class="form-control @error('series') is-invalid @enderror"
                  id="series"
                  placeholder="Serie"
                  value="{{old('series', $comic->series)}}"
                >
                @error('series')
                  <div class="text-danger my-1" style="font-size: .8rem">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-5">
              <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input
                  name="sale_date"
                  type="date"
                  class="form-control @error('sale_date') is-invalid @enderror"
                  id="sale_date"
                  placeholder="Data di uscita"
                  value="{{old('sale_date', $comic->sale_date)}}"
                >
                @error('sale_date')
                  <div class="text-danger my-1" style="font-size: .8rem">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-12">
              <div class="mb-3">
                <label for="type" class="form-label">Categoria</label>
                <input
                  name="type"
                  type="text"
                  class="form-control @error('type') is-invalid @enderror"
                  id="type"
                  placeholder="Categoria"
                  value="{{old('type', $comic->type)}}"
                >
                @error('type')
                  <div class="text-danger my-1" style="font-size: .8rem">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-12">
              <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input
                  name="artists"
                  type="text"
                  class="form-control @error('artists') is-invalid @enderror"
                  id="artists"
                  placeholder="Inserisci uno o più artisti, separati da una virgola"
                  value="{{old('artists', $comic->artists)}}"
                >
                @error('artists')
                  <div class="text-danger my-1" style="font-size: .8rem">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-12">
              <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input
                  name="writers"
                  type="text"
                  class="form-control @error('writers') is-invalid @enderror"
                  id="writers"
                  placeholder="Inserisci uno o più scrittori, separati da una virgola"
                  value="{{old('writers', $comic->writers)}}"
                >
                @error('writers')
                  <div class="text-danger my-1" style="font-size: .8rem">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-12">
              <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" class="form-control" id="description" rows="8">{{old('description', $comic->description)}}</textarea>
              </div>
            </div>

            <div class="col-12">
              <div class="mb-3 float-end">
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
