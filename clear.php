<?PHP
  function clearMylist(){
    $dbhost = 'localhost:3036';
    $dbuser = 'root';
    $dbpass = 'eeyore';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);

    if(! $conn ) {
      die('Could not connect: ' . mysql_error());
    }
#sql for unselect all to clear list
    $sql = 'UPDATE Exercises
		SET Active = "n"';
    mysql_select_db('Eats');
    $retval = mysql_query( $sql, $conn );
    if(! $retval ) {
      die('Could not enter data_: ' . mysql_error());
      $url = 'index.php';
      echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }
  }
  function AddAll(){
    $dbhost = 'localhost:3036';
    $dbuser = 'root';
    $dbpass = 'eeyore';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);

    if(! $conn ) {
      die('Could not connect: ' . mysql_error());
    }
	#Sql for Select all to add entire database
		$sql = 'UPDATE Exercises
		SET Active = "y"';
    mysql_select_db('Eats');
    $retval = mysql_query( $sql, $conn );
    if(! $retval ) {
      die('Could not enter data_: ' . mysql_error());
      $url = 'index.php';
      echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }
  }
?>
