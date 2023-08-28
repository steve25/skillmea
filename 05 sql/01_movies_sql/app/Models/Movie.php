<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Movie extends Model
{
  public function getMovies()
  {
    $sql = "
    SELECT
      d.first_name || ' ' || d.last_name AS director,
      m.id, m.director_id, title, year, gross, genre
    FROM movies m
    LEFT JOIN directors d ON m.director_id = d.id
    ";



    $limit = 5;
    $page = app('request')->get('page') ?: 1;
    $offset = ($page - 1) * $limit;

    $sql .= "LIMIT $limit OFFSET $offset";

    return app('db')->select($sql);
  }

  public function getMoviesByDirector($id)
  {
    return app('db')->select("
        SELECT
          d.first_name || ' ' || d.last_name AS director,
          m.id, m.director_id, title, year, gross, genre
        FROM movies m
        LEFT JOIN directors d ON m.director_id = d.id
        WHERE
         director_id = ?
      ", [$id]);
  }


  public function getMovie($id)
  {
    return app('db')->selectOne("
        SELECT m.*, d.first_name || ' ' || d.last_name AS director
        FROM movies m
        LEFT JOIN directors d ON m.director_id = d.id
        WHERE m.id = ?
      ", [$id]);
  }


  public function createMovie($data)
  {
    $insert =  app('db')->insert("
    INSERT INTO movies 
      (director_id, title, year, gross, genre, summary)
    VALUES
      (:did, :title, :year, :gross, :genre, :summary)
    ", [
      'did' => $data['director_id'],
      'title' => $data['title'],
      'year' => (int) $data['year'],
      'gross' => (int) $data['gross'],
      'genre' => $data['genre'],
      'summary' => $data['summary']
    ]);

    return app('db')->getPDO()->lastInsertId();
  }

  public function getMoviesByGenre($name)
  {
    return app('db')->select("
        SELECT
          d.first_name || ' ' || d.last_name AS director,
          m.id, m.director_id, title, year, gross, genre
        FROM movies m
        LEFT JOIN directors d ON m.director_id = d.id
        WHERE
         genre = ?
      ", [$name]);
  }

  public function getMoviesCount()
  {
    $select = app('db')->selectOne("
      SELECT COUNT(1) AS count
      FROM movies
    ");

    return $select->count;
  }

  public function updateMovie($id, $data)
  {
    return app('db')->update("
    UPDATE movies SET
      director_id = :did,
      title = :title,
      year = :year,
      gross = :gross,
      genre = :genre,
      summary = :summary
    WHERE id = :id
    ", [
      'did' => $data['director_id'],
      'title' => $data['title'],
      'year' => (int) $data['year'],
      'gross' => (int) $data['gross'],
      'genre' => $data['genre'],
      'summary' => $data['summary'],
      'id' => $id
    ]);
  }

  public function deleteMovie($id)
  {
    return app('db')->delete("
    DELETE FROM movies
    WHERE id = ?
    ", [$id]);
  }

  // public function getSum($item = null, $request = null)
  // {
  //   $sql = "
  //       SELECT SUM(gross) AS sum
  //       FROM movies
  //       ";

  //   $bindings = [];

  //   if ($item && $request) {
  //     $sql .= "WHERE :item = :request";

  //     $bindings = [
  //       'item' => $item,
  //       'request' => $request
  //     ];
  //     // $sql .= "
  //     //     WHERE $item = '$request'
  //     //   ";
  //   }
  //   // dd($sql, $bindings);
  //   dd(DB::select($sql, $bindings)[0]->sum);
  //   return app('db')->selectOne($sql, $bindings);
  // }

  public function getSum($item = null, $request = null)
  {
    $sum = DB::table('movies')
      ->selectRaw('SUM(gross) as total')
      ->when($item && $request, function ($query) use ($item, $request) {
        // your condition 
        $query->where([
          $item => $request
        ]);
      })
      ->first(['total'])->total;
    return $sum;
  }
}
