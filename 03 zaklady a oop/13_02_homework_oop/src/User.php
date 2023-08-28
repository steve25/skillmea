<?php

namespace Users;

class User
{
  public $first_name;
  public $last_name;
  public $email;
  public $avatar;

  function __construct()
  {
  }

  public function setFirst_name($newFirst_name)
  {
    $this->first_name = $newFirst_name;
  }
  public function setLast_name($newLast_name)
  {
    $this->last_name = $newLast_name;
  }
  public function setEmail($newEmail)
  {
    $this->email = $newEmail;
  }
  public function setavatar($newAvatar)
  {
    $this->avatar = $newAvatar;
  }
  public function getFirst_name()
  {
    return $this->first_name;
  }
  public function getLast_name()
  {
    return $this->last_name;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function getavatar()
  {
    return $this->avatar;
  }
  public function fullName()
  {
    echo $this->first_name . " " . $this->last_name;
  }
  public function makeCard()
  {
    echo "Name: ";
    echo $this->fullName() . "<br>";
    echo "Email: <a href='mailto:{$this->email}'>{$this->email}</a><br>";
    echo "My avatar :) :<img src='{$this->avatar}' width='200' alt='avatar :)'>";
    echo "<hr>";
  }
}
