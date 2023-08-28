<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

  protected $model;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->model = new Movie();
  }

  function index()
  {

    $movies = $this->model->getMovies();
    $count = $this->model->getMoviesCount();
    $sum = $this->model->getSum();


    return view('movies.index')
      ->with('movies', $movies)
      ->with('movies_count', $count)
      ->with('sum', $sum);
  }


  public function show($id)
  {
    $movie = $this->model->getMovie($id);

    return view('movies.show')
      ->with('movie', $movie);
  }


  public function create()
  {
    return view('movies.create');
  }

  public function edit($id)
  {
    $movie = $this->model->getMovie($id);

    return view('movies.edit')
      ->with('movie', $movie);
  }


  public function store(Request $request)
  {
    $id = $this->model->createMovie(
      $request->all()
    );

    return redirect("movie/$id?alert=added");
  }

  public function update(Request $request)
  {
    $id = $request->segment(2);
    $data = $request->except('_method');

    $this->model->updateMovie($id, $data);

    return redirect("movie/$id?alert=edit");
  }

  public function destroy($id)
  {
    $this->model->deleteMovie($id);
    return redirect('?alert=delete');
  }
}
