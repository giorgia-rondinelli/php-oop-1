<?php
class Movie {
  public $title;
  public $year;
  public $language;
  public $genre;
  public $director;

  function __construct( string $_title, int $_year,$_director,string $_genre, string $_language)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this-> director= $_director;
    $this->genre= $_genre;
    $this->language= $_language;

  }

  public function GetInfo(){
    return "$this->title, $this->year, $this->director, $this->genre, $this->language";
  }
  

}
