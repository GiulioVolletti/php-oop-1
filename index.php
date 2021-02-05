<?php
  include __DIR__ . '/oop-first.php';

  /*
   $test = new Book;
  var_dump($test);
  */

  $bookOne = new Book('The War of the Worlds', ' H. G. Wells', 4.65 );
  var_dump($bookOne);

  $bookTwo = new Book('Se questo è un uomo', ' Primo Levi', 11 , 'Se questo è un uomo è un\'opera memorialistica di Primo Levi scritta tra il dicembre 1945 ed il gennaio 1947.', 1947, 'Feltrinelli');
  var_dump($bookTwo);
?>
