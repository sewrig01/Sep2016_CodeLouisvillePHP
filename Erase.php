<?PHP
$dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'eeyore';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   #working on UPDATE function
   #testing SQL update
#   $sql = "UPDATE Exercises SET Reps = '$Srep' WHERE id = '$currid'";

#sql for delete4
 $sql = 'DELETE FROM Exercises where Reps = 0';
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

?>
