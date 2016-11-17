<?php
#include ("y.php");

$FormName= htmlspecialchars($_POST["FormName"]);
$FormWeight= htmlspecialchars($_POST["FormWeight"]);
$FormSets= htmlspecialchars($_POST["FormSets"]);
$FormReps= htmlspecialchars($_POST["FormReps"]);
$FormLastDate= htmlspecialchars($_POST["FormLastDate"]);
$FormMG= htmlspecialchars($_POST["FormMG"]);
$FormId= htmlspecialchars($_POST["FormId"]);
/*
Debug echo statements
echo "Updated";*/

$dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'eeyore';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   #working on UPDATE function


   #testing SQL update
   $sql = "UPDATE Exercises SET ExerciseName = '$FormName',Sets = '$FormSets',Reps = '$FormReps', Weight = '$FormWeight',MG = '$FormMG', LastDate = '$FormLastDate' WHERE id = '$FormId'";

#sql for delete4
# $sql = 'DELETE FROM Exercises where id > "56"';
#Sql for add all
#	$sql = 'UPDATE EatSpots
#	SET EatPicked = "y"';
	#Sql for Remove all
#		$sql = 'UPDATE EatSpots
#		SET EatPicked = "n"';


   mysql_select_db('Eats');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not enter data_: ' . mysql_error());
      $url = 'index.php';
     echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
   }
   $url = 'index.php';
  echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    ?>
