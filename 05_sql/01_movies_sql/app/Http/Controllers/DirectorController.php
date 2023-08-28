<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\Movie;
use Illuminate\Http\Request;

class DirectorController extends Controller
{

  protected $movie;
  protected $director;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->movie = new Movie();
    $this->director = new Director();
  }

  public function index()
  {
    return $this->director->getDirectors();
  }


  public function show($id)
  {
    $movies = $this->movie->getMoviesByDirector($id);
    $director = $this->director->getDirector($id);
    $sum = $this->movie->getSum('director_id', $director->id);


    return view('movies.index')
      ->with('title', $director->name)
      ->with('director', $director)
      ->with('movies', $movies)
      ->with('sum', $sum);
  }


  public function create()
  {
    return view('directors.create');
  }

  public function edit($id)
  {
    $director = $this->director->getDirector($id);

    return view('directors.edit')
      ->with('director', $director);
  }


  public function store(Request $request)
  {

    $id = $this->director->createDirector(
      $request->all()
    );

    return redirect("director/$id?alert=added");
  }


  public function update(Request $request)
  {
    $id = $request->segment(2);
    $data = $request->except('_method');

    $this->director->updateDirector($id, $data);

    return redirect("director/$id?alert=edit");
  }

  public function destroy($id)
  {
    $this->director->deleteDirector($id);
    return redirect('?alert=delete');
  }

  public function choose(Request $request)
  {
    $id = $request->input('director_id');
    return redirect("director/$id");
  }
}
