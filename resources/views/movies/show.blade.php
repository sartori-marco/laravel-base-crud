@extends('layouts.app')

@section('title', 'home movies')
    
@section('content')
    <h2>Elenco film:</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">genre</th>
            <th scope="col">author</th>
            <th scope="col">descriptions</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              {{-- lo vedo nel terminale route list --}}
                <th scope="row">{{ $movie-> id }}</th>
                <td>{{ $movie-> title }}</td>
                <td>{{ $movie-> genre }}</td>
                <td>{{ $movie-> regista }}</td>
                <td>{{ $movie-> description }}</td>
              </tr>
          
        </tbody>
      </table>
@endsection