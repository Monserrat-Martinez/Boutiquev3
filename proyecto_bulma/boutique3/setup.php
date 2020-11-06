<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>

<?php // Example 26-3: setup.php
  require_once 'functions.php';

  
  createTable('messages', 
              'recip VARCHAR(16),
              messages VARCHAR(4096),
              INDEX(recip(6))');

  createTable('purchases',
              'nombre VARCHAR(16),
              apellidos VARCHAR(16),
              direccion VARCHAR(16),
              email VARCHAR(16),
              codigo VARCHAR(16),
              ciudad VARCHAR(16)');
  
  
?>

    <br>...done.
  </body>
</html>


  