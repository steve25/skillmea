<?php


class Adventure
{

  protected $dudes = [];

  public function getDudes()
  {
    return $this->dudes;
  }

  public function addDude(Dude $dude)
  {
    array_push($this->dudes, $dude);
  }

  public function getDude($searched_dude)
  {

    foreach ($this->dudes as $dude) {
      if ($searched_dude == $dude->who) {
        return $dude;
      }
    }

    return false;
  }

  public function updateDude($updated_dude, $new_who, $new_wat)
  {

    foreach ($this->dudes as $key => $dude) {
      if ($updated_dude == $dude->who) {
        $this->dudes[$key]->who = $new_who;
        $this->dudes[$key]->wat = $new_wat;
        return $dude;
      }
    }

    return false;
  }

  public function removeDude($removed_dude)
  {
    foreach ($this->dudes as $key => $dude) {
      if ($removed_dude == $dude->who) {
        unset($this->dudes[$key]);
      }
    }

    return false;
  }

  public function dudeCount()
  {
    return count($this->dudes);
  }

  public function allComments()
  {
    $comments = [];

    foreach ($this->dudes as $dude) {
      foreach ($dude->getComments() as $comment) {
        array_push($comments, $comment);
      }
    }

    return $comments;
  }

  public function commentsCount()
  {
    return count($this->allComments());
  }
}
