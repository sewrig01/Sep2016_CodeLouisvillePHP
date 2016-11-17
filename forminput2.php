<?php
  include ("y.php");
  echo "Hello";
  $ExerciseName= htmlspecialchars($_POST["ExerciseName"]);
  $Sets= htmlspecialchars($_POST["Sets"]);
  $Reps= htmlspecialchars($_POST["Reps"]);
  $Weight= htmlspecialchars($_POST["Weight"]);
  $LastDate= htmlspecialchars($_POST["LastDate"]);
  $MG= htmlspecialchars($_POST["MG"]);
  $Dates= htmlspecialchars($_POST["Dates"]);
  $Active= htmlspecialchars($_POST["Active"]);

/*
echo $ExerciseName;
echo $Sets;
echo $Reps;
echo $Weight;
echo $LastDate;
echo $Group;
echo $Dates;
echo $Active;
*/
#verify that all fields are entered
#allow name only to be set

  if (isset($ExerciseName) AND $ExerciseName !="") {
  ini_set('display_errors','On');
  $dsn = 'mysql:dbname=Eats;host=localhost;';
  $username = 'root';
  $password = 'eeyore';
  try {
    $db = new PDO($dsn, $username, $password); // also allows an extra parameter of configuration
    $sql = 'INSERT INTO Exercises (ExerciseName,Sets,Reps,Weight,LastDate,MG,Dates,Active) VALUES (:ExerciseName,:Sets, :Reps, :Weight, :LastDate, :MG, :Dates, :Active)';
  $stmt=$db->prepare($sql);
  $stmt->bindParam(':ExerciseName', $_POST['ExerciseName']);
  $stmt->bindParam(':Sets', $_POST['Sets']);
  $stmt->bindParam(':Reps', $_POST['Reps']);
  $stmt->bindParam(':Weight', $_POST['Weight']);
  $stmt->bindParam(':LastDate', $_POST['LastDate']);
  $stmt->bindParam(':MG', $_POST['MG']);
  $stmt->bindParam(':Dates', $_POST['Dates']);
  $stmt->bindParam(':Active', strtolower($_POST['Active']));
  $stmt->execute();
  $url = 'index.php';
  echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    } catch(PDOException $e) {  die('Could not connect to the database:<br/>' . $e);

    }
  }  else {
    #return to form if no input
    $url = 'form.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  }
  #escape input;


?>
