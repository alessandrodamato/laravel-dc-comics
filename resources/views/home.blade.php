@extends('layout.main')



@section('title')

- Home

@endsection



@section('content')

<div class="container py-5 text-center">

  <h1 class="mb-3">Home</h1>

  <h4>Nel nostro database abbiamo {{$n_comics}} fumetti</h4>

</div>

@endsection
