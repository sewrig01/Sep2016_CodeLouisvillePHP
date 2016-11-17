<?php
	session_start();
	$pageTitle = "Lifting Page";
	$Section = "Main";
	$PgHeading = "Ready to workout?";
	$sorttype="name";
	$sorttype = $_POST['sorttype'];
	$Clear = $_POST['Clear'];
	$AddAll = $_POST['AddAll'];
#includes
	include "header.php";
	include 'db_Conn.php';
	include 'y.php';
	include 'display.php';
	include 'clear.php';
?>

<Div class="col-sm-4">
	<div  >
		<h2>Sort options:</h2>
		<form method="POST" action="index.php">
			<input type="submit" name="sorttype" value="ExerciseName" class='btn btn-primary'/>
			<input type="submit" name="sorttype" value="Sets" class='btn btn-primary' />
			<input type="submit" name="sorttype" value="Reps" class='btn btn-primary'/>
			<input type="submit" name="sorttype" value="Weight" class='btn btn-primary'/>
			<input type="submit" name="sorttype" value="LastDate" class='btn btn-primary'/>
			<input type="submit" name="sorttype" value="MG" class='btn btn-primary'/>
		</form>
		<h2>Press clear to clear your list. Press Add All to add everything! </h2>
		<form method="POST" action="index.php">
			<input type="submit" name="Clear" value="Clear" class='btn btn-success'/>
			<input type="submit" name="AddAll" value="Add All" class='btn btn-success'/>
		</form>
		<h2>Adding an Exercise? </h2>
	</div>
	<form method = "post" action = "form.php" >
		<input type = "submit" value = "Add an exercise" class='btn btn-success'/>
	</form>
	<!-- REMOVED UNNEEDED FUNCTION
		<h2>If you are satisfied with your list...  </h2>
	<form method = "post" action = "MyPick.php">
		<input type = "submit" value = <?php $results ?> "Ready to pick" class='btn btn-danger btn-lg'>
	</form>
-->
</div>

<Div class="col-sm-12">
<?php
	if ($Clear == "Clear"){
		$Clear=0;
		clearMylist();
	}
	if ($AddAll == "Add All"){
		$AddAll=0;
		AddAll();
	}
	$stmt = $db->query('SELECT * FROM Exercises ORDER BY ExerciseName');
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- Use form to remove from Picked list -->
	<form method="post" action = "x.php">
		<select name = "MyOption">
			<option selected="selected">
				Make Inactive
			</option>
<?php
	foreach ($results as $item){
	if (strtolower($item["Active"])=="y"){
?>
<!-- Fill in values to populate Selection drop down -->
			<option value = "<?php echo $item["id"]; ?>">
				<?php echo $item["ExerciseName"]." ".$item["Sets"]; ?></option>
				<?php
			}}
 ?>
		</select>
		<input type = "submit" value="submit" class='btn btn-success'>
	</form>
<?php
#Database connect and dump to $results sorted based on $sorttype variable
	if ($sorttype == "ExerciseName"){
			$stmt = $db->query('SELECT * FROM Exercises ORDER BY ExerciseName');
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	#display picked items
			foreach ($results as $id=>$item){
			#use Active to determine if flag is set
				if (strtolower($item["Active"])=="y"){
					echo display_all($id,$item);
				};
			}
	}
 	elseif  ($sorttype == "Sets"){
		$stmt = $db->query('SELECT * FROM Exercises ORDER BY Sets');
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		#display picked items
		foreach ($results as $id=>$item){
			#use EatPicked to determine if flag is set
			if (strtolower($item["Active"])=="y"){
				echo display_all($id,$item);
			};
		}
	}
 	elseif  ($sorttype == "Reps"){
		$stmt = $db->query('SELECT * FROM Exercises ORDER BY Reps');
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		#display picked items
		foreach ($results as $id=>$item){
			#use EatPicked to determine if flag is set
			if (strtolower($item["Active"])=="y"){
				echo display_all($id,$item);
			};
		}
	}
	elseif  ($sorttype == "Weight"){
		$stmt = $db->query('SELECT * FROM Exercises ORDER BY Weight');
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
					#display picked items
		foreach ($results as $id=>$item){
						#use Active to determine if flag is set
			if (strtolower($item["Active"])=="y"){
				echo display_all($id,$item);
			};
		}
	}
	elseif  ($sorttype == "LastDate"){
		$stmt = $db->query('SELECT * FROM Exercises ORDER BY LastDate');
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
					#display picked items
		foreach ($results as $id=>$item){
						#use Active to determine if flag is set
			if (strtolower($item["Active"])=="y"){
				echo display_all($id,$item);
			};
		}
	}
	elseif  ($sorttype == "MG"){
		$stmt = $db->query('SELECT * FROM Exercises ORDER BY MG');
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
					#display picked items
		foreach ($results as $id=>$item){
						#use Active to determine if flag is set
			if (strtolower($item["Active"])=="y"){
				echo display_all($id,$item);
			};
		}
	}
	else {
		$stmt = $db->query('SELECT * FROM Exercises ORDER BY ExerciseName');
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		#display picked items
		foreach ($results as $id=>$item){
		#use EatPicked to determine if flag is set
			if ($item["Active"]=="y"){
				echo display_all($id,$item);
			};
		}
	}
?>
</div>
<div class="col-sm-12">
	<form method="post" action = "z.php">
		<select name = "MyOption">
		<option selected="selected">
			Add to My List
		</option>
		<?php
		foreach ($results as $item){
		if ($item["Active"]!="y"){
			?>
		<option value = "<?php echo $item["id"]; ?>">
		<?php echo $item["ExerciseName"]." ".$item["Weight"]; ?></option>
		<?php
		}}
	 	?>
		</select>
		<input type = "submit" value="submit" class='btn btn-success'>
	</form>
<?php
#sort out only selected
	foreach ($results as $id=>$item){
		if ($item["Active"]=="y"){
			$test[] = $item;
		};
	}

#randomize from selected results
	if (isset($test)){
		$YourPick = $test[rand(0, count ($test)-1)]["ExerciseName"];
#Use session to store resuly array.
		$_SESSION['test'] = $test;
	}
#Database connect and dump to $results sorted based on $sorttype variable
	if ($sorttype == "Name"){
			$stmt = $db->query('SELECT * FROM Exercises ORDER BY ExerciseName');
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	#display picked items
			foreach ($results as $id=>$item){
			#use EatPicked to determine if flag is set
				if ($item["Active"]!="y"){
					echo display_all($id,$item);
				};
			}
	}
 	elseif  ($sorttype == "Address"){
		$stmt = $db->query('SELECT * FROM Exercises ORDER BY Sets');
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		#display picked items
		foreach ($results as $id=>$item){
			#use EatPicked to determine if flag is set
			if ($item["Active"]!="y"){
				echo display_all($id,$item);
			};
		}
	}
 	elseif  ($sorttype == "Genre"){
	$stmt = $db->query('SELECT * FROM Exercises ORDER BY Reps');
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		#display picked items
	foreach ($results as $id=>$item){
		#use EatPicked to determine if flag is set
		if ($item["Active"]!="y"){
			echo display_all($id,$item);
			};
		}
	}
	elseif  ($sorttype == "Price"){
		$stmt = $db->query('SELECT * FROM Exercises ORDER BY Weight');
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	#display picked items
		foreach ($results as $id=>$item){
			#use EatPicked to determine if flag is set
			if ($item["Active"]!="y"){
				echo display_all($id,$item);
			};
		}
	}
	else {
		$stmt = $db->query('SELECT * FROM Exercises ORDER BY ExerciseName');
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
#display picked items
		foreach ($results as $id=>$item){
#use EatPicked to determine if flag is set
			if ($item["Active"]!="y"){
				echo display_all($id,$item);
			};
		}
	}
?>
</div>
<?php
	include "footer.php";
?>
