<?php
  include __DIR__ . '/oop-first.php';

  /*
   $test = new Book;
  var_dump($test);
  */

  $object = new Book('The War of the Worlds', ' H. G. Wells', 4.65 );
  var_dump($object);
?>
