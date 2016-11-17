<?php
  ini_set('display_errors','On');
  $dsn = 'mysql:dbname=Eats;host=localhost;';
  $username = 'root';
  $password = 'eeyore';
  try {
    $db = new PDO($dsn, $username, $password); // also allows an extra parameter of configuration
  } catch(PDOException $e) {
      die('Could not connect to the database:<br/>' . $e);
    }
?>
