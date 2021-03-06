<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// collego il controller
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $film = Movie::all();
        $data = [
            'film' => $film
        ];

        return view('movies.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    //  per inviare i dati
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $newFilm = new Movie();
        $newFilm->title = $data['title'];
        $newFilm->genre = $data['genre'];
        $newFilm->regista = $data['author'];
        $newFilm->description = $data['description'];

        $newFilm->save();
        $newFilm->delete();
        dd($newFilm);

        return redirect()->route('movies.show', $newFilm->find($newFilm->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Movie::find($id);

        $data =[
            'movie' => $film
        ];
        return view('movies.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $film = Movie::find($id);

        $data =[
            'movie' => $film
        ];
        return view('movies.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $data = $request->all();
        // dd($data);

        // ERRORE
        $movie->update($data);
        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index');
    }
}
