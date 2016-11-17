<?PHP
  function AddAll(){
    $dbhost = 'localhost:3036';
    $dbuser = 'root';
    $dbpass = 'eeyore';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);

    if(! $conn ) {
      die('Could not connect: ' . mysql_error());
    }
#sql for delete-save for file operations
# $sql = 'DELETE FROM EatSpots where EatPrice= ""';
#Sql for add all
		$sql = 'UPDATE Exercises
		SET Active = "y"';
    mysql_select_db('Eats');
    $retval = mysql_query( $sql, $conn );

    if(! $retval ) {
      die('Could not enter data_: ' . mysql_error());
#refresh to index after operation
      $url = 'index.php';
      echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }
}
?>
