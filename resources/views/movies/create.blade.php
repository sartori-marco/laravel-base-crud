@extends('layouts.app')

@section('title', 'inserimento film')
    
@section('content')
   <h3>Film da inserire:</h3>

   <form>
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
      <label for="exampleInputEmail1">Descrizione</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection