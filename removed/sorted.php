<?php
  function array_sorted ($results,$category){
    $output = array();
    foreach ($results as $id => $item) {
      if strtolower($category) == strtolower ($item["category"])){
        $output [] = $id;
      }
    }
    return $output;
  }
?>
