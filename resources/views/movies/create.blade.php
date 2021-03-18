@extends('layouts.app')

@section('title', 'inserimento film')
    
@section('content')
   <h3>Film da inserire:</h3>

   {{-- per inviare i dati --}}
   <form method="POST" action="{{ route('movies.store') }}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Titolo</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="title">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="genre">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Autore</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="author">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Descrizione</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
@endsection