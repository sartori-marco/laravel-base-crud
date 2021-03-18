@extends('layouts.app')

@section('title', 'home movies')
    
@section('content')
    <h2>Elenco film:</h2>
    <a href=" {{ route('movies.create') }} ">Inserisci film:</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">genre</th>
            <th scope="col">author</th>
            <th scope="col">descriptions</th>
            <th scope="col">info</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($film as $item)
            <tr>
                <th scope="row">{{ $item-> id }}</th>
                <td>{{ $item-> title }}</td>
                <td>{{ $item-> genre }}</td>
                <td>{{ $item-> regista }}</td>
                <td>{{ $item-> description }}</td>
                {{-- lo vedo nel terminale route list --}}
                <td><a href=" {{ route('movies.show', ['movie'=> $item-> id]) }} ">dettagli</a></td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
@endsection