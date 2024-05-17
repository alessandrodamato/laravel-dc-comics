<form onsubmit="return confirm('Sei sicuro di voler cancellare {{$comic->title}} ?')" class="d-inline-block"
  action="{{route('comics.destroy', $comic)}}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger">Elimina</button>
</form>
