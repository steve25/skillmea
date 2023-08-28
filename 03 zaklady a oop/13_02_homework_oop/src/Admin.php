<?php

namespace Users;


class Admin extends User
{
  public function fullName()
  {
    echo User::fullName() . " -=AdmiN=-";
  }

  public function destroyEverything()
  {
    echo "I destroy all the treasures";
  }
}
