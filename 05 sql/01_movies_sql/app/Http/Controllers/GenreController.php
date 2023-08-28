<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;


class GenreController extends Controller
{

  protected $movie;
  protected $genre;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->movie = new Movie();
    $this->genre = new Genre();
  }


  public function show($name)
  {
    $movies = $this->movie->getMoviesByGenre($name);
    $sum = $this->movie->getSum('genre', $name);

    return view('movies.index')
      ->with('title', 'genre / ' . $name)
      ->with('movies', $movies)
      ->with('sum', $sum);
  }
}
