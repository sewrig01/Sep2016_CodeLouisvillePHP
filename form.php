<?php
  $pageTitle = "Enter a New Exercise";
  $Section = "Form";
  include ("header.php"); ?>
<!--need to add isset to keep out null values -->
  <div class=section>
    <div class="container">
      <h1>Add an exercise</h1>
      <form method = "post" action = "forminput2.php" >
      <table>
        <tr>
          <th><label for="ExerciseName">ExerciseName</label></th>
          <td><input type="text" id="ExerciseName" name="ExerciseName" /></td>
        </tr>
        <tr>
          <th><label for="Sets">Sets</label></th>
          <td><input type="text" id="Sets" name="Sets" /></td>
        </tr>
        <tr>
          <th><label for="Reps">Reps</label></th>
          <td><input type="text" id="Reps" name="Reps" /></td>
        </tr>
        <tr>
          <th><label for="Weight">Weight</label></th>
          <td><input type="text" id="Weight" name="Weight" /></td>
        </tr>
        <tr>
          <th><label for="LastDate">LastDate</label></th>
          <td><input type="text" id="LastDate" name="LastDate" /></td>
        </tr>
        <tr>
          <th><label for="MG">MG</label></th>
          <td><input type="text" id="MG" name="MG" /></td>
        </tr>
        <tr>
          <th><label for="Dates">Dates</label></th>
          <td><input type="text" id="Dates" name="Dates" /></td>
        </tr>
        <tr>
          <th><label for="Active">Active</label></th>
          <td><input type="text" id="Active" name="Active" /></td>
        </tr>

      </table>
      <input type = "submit" value = "Send" class='btn'/>
      </form>
    </div>
  </div>
  <div class = "container">
    <a href = "index.php">I have changed my mind</a>
  </div>
<?php
  include ("footer.php");
?>
