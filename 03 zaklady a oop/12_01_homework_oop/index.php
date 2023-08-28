<?php

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
    echo "My avatar :) :<img src='{$this->avatar}' width='250' alt='avatar :)'>";
    echo '<hr>';
  }
}

class Admin extends User
{
  public function fullName()
  {
    echo $this->first_name . " " . $this->last_name . " ---admin---";
  }
  public function destroyEverything()
  {
    echo "I destroy all the treasures";
  }
}


$first_name = 'steve';
$lastname_name = 'stevenson';
$email = 'steve@stevenson.com';
$avatar = 'avatar.webp';

$user = new User();
$user->setFirst_name($first_name);
$user->setLast_name($lastname_name);
$user->setEmail($email);
$user->setAvatar($avatar);
$user->makeCard();

$admin = new Admin();
$admin->setFirst_name('admin');
$admin->setLast_name('ADMIN');
$admin->fullName();
$admin->destroyEverything();
