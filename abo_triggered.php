<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>ABONNIERT!!</title>
  <?php 
	mb_internal_encoding("UTF-8");
	$db = mysqli_connect("localhost", "root", "", "fussball");
	$name=$_POST["name"];
	$vorname=$_POST["vorname"];
	$email=$_POST["email"];
	
	$mitglied=false;
	if(isset($_POST["mitglied"])){
		$mitglied=true;
		echo $mitglied."<br>";
	}

	if(stripos($email, "@") == false){
		echo '<meta http-equiv="refresh" content="3; URL=/abo.php">';
	}
	
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

	echo "</head>";
	echo "<body>";
	
	if($name == ''){
		echo "You have to enter a name !";
	}
?>
</body>
</html>
