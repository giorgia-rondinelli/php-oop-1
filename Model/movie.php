<?php
class Movie {
  public $title;
  public $year;
  public $language;
  public $genres;
  public $director;

  function __construct( string $_title, int $_year,$_director,array $_genres, string $_language)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this-> director= $_director;
    $this->genres= $_genres;
    $this->language= $_language;

  }

  public function GetInfo(){
    return "Title: $this->title, Year: $this->year, Director: $this->director, Language:  $this->language";
  }
  

}
