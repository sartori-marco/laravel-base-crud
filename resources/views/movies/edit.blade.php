@extends('layouts.app')

@section('title', 'inserimento film')
    
@section('content')
   <h3>Film da modificare:</h3>

   {{-- per modificare i dati --}}
   <form method="post" action="{{ route('movies.update', $movie->id) }}">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Titolo</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{ $movie->title }}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Genere</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="genre"  value="{{ $movie->genre }}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Autore</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="author"  value="{{ $movie->author }}">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Descrizione</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$movie->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
@endsection