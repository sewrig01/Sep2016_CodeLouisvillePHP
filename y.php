<?php
##start function to delete to database. Need to set to take var input from form.
  function deltodb(){
    $dbhost = 'localhost:3036';
    $dbuser = 'root';
    $dbpass = 'eeyore';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ) {
      die('Could not connect: ' . mysql_error());
    }
    $sql = 'DELETE FROM Exercises WHERE ExerciseName = "Stephen Wright"';
    mysql_select_db('Eats');
    $retval = mysql_query( $sql, $conn );
    if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
    }
    echo "Deleted data successfully\n";
    mysql_close($conn);
  };
##start function to add to database. Need to set to take var input from form.
#function addtodb(){
#added passed arguments
  function addtodb($a,$b,$c,$d,$e,$f,$g){
    $dbhost = 'localhost:3036';
    $dbuser = 'root';
    $dbpass = 'eeyore';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ) {
      die('Could not connect: ' . mysql_error());
    }
   $sql = 'INSERT INTO Recipes (ExerciseName, Sets, Reps, LastDate, Group, Dates, Active) VALUES ( '.$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.')';
   mysql_select_db('Exercises');
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   echo "Entered data successfully\n";
      mysql_close($conn);
};

##start function to deselect to database. Need to set to take var input from form.
  function deseltodb($id){

    $dbhost = 'localhost:3036';
    $dbuser = 'root';
    $dbpass = 'eeyore';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ) {
      die('Could not connect: ' . mysql_error());
    }
    $sql = '
    UPDATE Exercises
    SET Active = "n"
    Where id = '.$id.';';
    mysql_select_db('Eats');
    $retval = mysql_query( $sql, $conn );
    if(! $retval ) {
  #  die('Could not enter data_: ' . mysql_error());
  #removed die and refresh to index if no value.
    $url = 'index.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }
  };
   #function to select passed id to db
  function seltodb($id){
   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'eeyore';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn ) {
     die('Could not connect: ' . mysql_error());
   }
   $sql = '
   UPDATE Exercises
   SET Active = "y"
   Where id = '.$id.';';
   mysql_select_db('Eats');
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
  #   die('Could not enter data: ' . mysql_error());
    $url = 'index.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}

    #  echo "Selected data successfully\n";
      };


?>
