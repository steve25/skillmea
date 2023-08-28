<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
  public function getDirectors()
  {
    return app('db')->select("
    SELECT *, first_name || ' ' || last_name AS name
    FROM directors
  ");
  }


  public function getDirector($id)
  {
    return app('db')->selectOne("
    SELECT *, first_name || ' ' || last_name AS name
    FROM directors
    WHERE id = ?
  ", [$id]);
  }

  public function createDirector($data)
  {
    $insert =  app('db')->insert("
    INSERT INTO directors 
      (first_name, last_name, country, birthdate)
    VALUES
      (:first_name, :last_name, :country, :birthdate)
    ", [
      'first_name' => $data['first_name'],
      'last_name' => $data['last_name'],
      'country' => $data['country'],
      'birthdate' => $data['birthdate']
    ]);

    return app('db')->getPDO()->lastInsertId();
  }

  public function updateDirector($id, $data)
  {
    return  app('db')->update("
    UPDATE directors SET 
      first_name = :first_name,
      last_name = :last_name,
      country = :country,
      birthdate = :birthdate
    WHERE id = :id
    ", [
      'id' => $id,
      'first_name' => $data['first_name'],
      'last_name' => $data['last_name'],
      'country' => $data['country'],
      'birthdate' => $data['birthdate']
    ]);
  }

  public function deleteDirector($id)
  {
    return app('db')->delete("
    DELETE FROM directors
    WHERE id = ?
    ", [$id]);
  }
}
