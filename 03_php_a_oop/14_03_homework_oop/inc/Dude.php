<?php


class Dude
{

  public $who;
  public $wat;
  public $comments = [];


  /**
   * Dude constructor.
   *
   * @param     $who
   * @param     $wat
   * @param     $comments
   */
  public function __construct($who, $wat)
  {
    $this->who      = $who;
    $this->wat      = $wat;
  }


  /**
   * @return mixed
   */
  public function getWho()
  {
    return $this->who;
  }


  /**
   * @param mixed $who
   */
  public function setWho($who)
  {
    $this->who = $who;
  }


  /**
   * @return mixed
   */
  public function getWat()
  {
    return $this->wat;
  }


  /**
   * @param mixed $wat
   */
  public function setWat($wat)
  {
    $this->wat = $wat;
  }


  /**
   * @return array
   */
  public function getComments()
  {
    return $this->comments;
  }


  /**
   * @param array $comments
   */
  public function setComments($comments)
  {
    $this->comments = $comments;
  }

  public function addComment($comment)
  {
    array_push($this->comments, $comment);
  }
}
