<?php
#  function display_all($id, $item){
#    echo "<li><b>".$item["ExerciseName"].
#    "</b>    Sets".$item["Sets"]."  <b> Reps  ".
#    $item["Reps"]."</b>    ".$item["Weight"]." pounds.  Last date = " .$item["LastDate"]."</li> <form method='POST' action='index.php'>
#      <input type='submit' name='sorttype' value= ".$item["ExerciseName"]."|newt class='btn btn-primary'/>";
#  }

  function display_all($id, $item){
if ($item["Active"]!='y'){
    echo "<form method = 'post' form action = 'q.php'  class ='inactive'>
    Exercise :<input type ='text' class = 'tboxLG inactive' name = 'FormName' value = '".$item["ExerciseName"]."'<br>
    Weight :<input type ='text' class = 'tboxMD inactive' name = 'FormWeight' value = '".$item["Weight"]."'<br>
      Sets :<input type ='text' class = 'tboxSM inactive' name = 'FormSets' value = '".$item["Sets"]."'<br>
        Reps :<input type ='text' class = 'tboxSM inactive' name = 'FormReps' value = '".$item["Reps"]."'<br>
          Last Date :<input type ='text' class = 'tboxLG inactive' name = 'FormLastDate' value = '".$item["LastDate"]."'<br>
          MG:<input type = 'text' class = 'tboxMD inactive' name = 'FormMG' value = '".$item["MG"]."'<br>
          Active:<input type = 'text' class = 'tboxSM inactive' name = 'FormAc' value = '".$item["Active"]."'<br>
        id:<input type ='hidden' name = 'FormId' value = '".$item["id"]."'<br>
        <input type='submit' value = 'update'>
        </form>";}
        else{echo "<form method = 'post' form action = 'q.php'>
        Exercised :<input type ='text' class = 'tboxLG' name = 'FormName' value = '".$item["ExerciseName"]."'<br>
        Weight :<input type ='text' class = 'tboxMD' name = 'FormWeight' value = '".$item["Weight"]."'<br>
          Sets :<input type ='text' class = 'tboxSM' name = 'FormSets' value = '".$item["Sets"]."'<br>
            Reps :<input type ='text' class = 'tboxSM' name = 'FormReps' value = '".$item["Reps"]."'<br>
              Last Date :<input type ='text' class = 'tboxLG' name = 'FormLastDate' value = '".$item["LastDate"]."'<br>
              MG:<input type = 'text' class = 'tboxMD' name = 'FormMG' value = '".$item["MG"]."'<br>
              Active:<input type = 'text' class = 'tboxSM' name = 'FormAc' value = '".$item["Active"]."'<br>
            id:<input type ='hidden' name = 'FormId' value = '".$item["id"]."'<br>
            <input type='submit' value = 'update'>
            </form>";}



}

?>
