<?php
  include ("y.php");
  $id= $_POST["MyOption"];
  deseltodb("$id");
  $url = 'index.php';
  echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
