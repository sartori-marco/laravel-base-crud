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
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
          </tr>
        </tbody>
      </table>
@endsection