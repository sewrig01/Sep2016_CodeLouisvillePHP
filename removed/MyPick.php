
<?PHP
#get array from index.php
	session_start();
	$test = $_SESSION['test'];
	$pageTitle = "The Results...";
	$Section = "Main";
	$PgHeading = "You will dine at...";
#randomize pick from imported array
	$YourRand = rand(0, count ($test)-1);
#assign key to values
	$YourPick = $test[$YourRand]["EatName"];
	$PickAddress = $test[$YourRand]["EatAddress"];
	$PickGenre = $test[$YourRand]["EatGenre"];
	$PickPrice = $test[$YourRand]["EatPrice"];
#message varies by price
	if ($PickPrice =="$"){
		$PriceMessage = "so get some pennies from the couch";
	}
	elseif ($PickPrice =="$$"){
		$PriceMessage = "for a reasonable meal";
	}
	elseif ($PickPrice =="$$$"){
		$PriceMessage = "for a good meal";
	}
	elseif ($PickPrice =="$$$$"){
		$PriceMessage = "don't forget your wallet!";
	}
	else{
		$PriceMessage = "enjoy!";
	}
	?>
<div class = "container"
	<?php
	echo "<h2>Mmmmm ".$PickGenre."... </h2>";
	include "header.php";
	echo "<div class = 'jumbotron'>
	<h1>". $YourPick."</h1><h2> on ".$PickAddress."</h2><h3>".$PriceMessage.
	"</h3></div>";
?>
<a href = "index.php">Start Over</a>
</div>
<?php
	include "footer.php";
?>
