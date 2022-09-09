<?php
class Movie 
{
  public $title;
  public $description;
  public $relase_date;
  public $genre;

  public function __construct( $title, $description, $relase_date, $genre ) {
    $this->title = $title;
    $this->description = $description;
    $this->relase_date = $relase_date;
    $this->genre = $genre;
  }
}