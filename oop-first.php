<?php

/*
  Creare una classe Book per modellare il concetto di libro, pensando a quali proprietà e metodi potrebbero essere utili.
  Poi provare a creare istanze di quella classe, ad accedere alle proprietà e metodi degli oggetti creati, a stampare gli oggetti con var_dump.
*/

class Book {

  public $originalName;
  public $author;
  public $price;
  public $description;
  public $publishDate;
  public $publisher;

  // Construct
  public function __construct($name, $author, $price, $description = 'non disponibile', $date = '', $publisher = '') {
    // echo "test";
    $this->originalName = $name;
    $this->author = $author;
    $this->price = $price;
    $this->description = $description;
    $this->publishDate = $date;
    $this->publisher = $publisher;

  }



};


?>
