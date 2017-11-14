<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>VERSENDET!!</title>
  <?php 
	mb_internal_encoding("UTF-8");
	$db = mysqli_connect("localhost", "root", "", "fussball");

	$fan="";
	echo "<br>".$_POST["fan"]."<br>";
	if(isset($_POST["fan"]))
		$fan=$_POST["fan"];
	
	$mitglied=" >= 0";
	if(isset($_POST["mitglied"]))
		$mitglied = " and a.mitglied = $mitglied";
	//liga
	$betreff="";
	if(isset($_POST["betreff"]))
		$betreff=$_POST["betreff"];

	$nachricht="";
	if(isset($_POST["nachricht"]))
		$nachricht=$_POST["nachricht"];
	
	echo "fan = ".$fan."<br>";
	echo "mitglied = ".$mitglied."<br>";
	echo "betreff = ".$betreff."<br>";
	echo "nachricht = ".$nachricht."<br>";
	
	$abfrage = "select a.email, a.* from abo a where 1=1 $mitglied;";
	
	echo "abfrage = ".$abfrage;
	
	/*
	$abfrage = "Insert into abo values ('$email', '$name', '$vorname', $mitglied);";
	$ergebnis = mysqli_query($db,$abfrage) OR die(mysqli_error($db));
	echo "<br>ergebnis insert abo : ".$ergebnis."<br>";
	
	$abfrage = "select * from liga;";
	$ergebnis = mysqli_query($db,$abfrage) OR die(mysqli_error($db));
	
	while($zeile = mysqli_fetch_assoc($ergebnis)){
		$id=$zeile['id'];
		echo "id=".$id."<br>";
		if(isset($_POST[$id])){
			$abfrage = "Insert into abo_liga values ('$email', $id);";
			echo $abfrage."<br>";
			$erg = mysqli_query($db,$abfrage) OR die(mysqli_error($db));
		}
	}
*/
	echo "</head>";
	echo "<body>";
	
		echo "<table>";
			echo "<tr>";
				echo "<td> An:</td>";
				echo "<td>".$empfaengerListe."</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td> Betreff:</td>";
				echo "<td>".$betreff."</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td> Nachricht:</td>";
				echo "<td>".$nachricht."</td>";
			echo "</tr>";
		echo "</table>";
?>
</body>
</html>
