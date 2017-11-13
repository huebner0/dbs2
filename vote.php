<html>
<head>
  <meta charset="utf-8"/>
  <title>VOTED!!</title>
  <?php 
	mb_internal_encoding("UTF-8");
	$db = mysqli_connect("localhost", "root", "", "fussball");
	$vereinsname=$_POST["voted"];
	if($vereinsname == ''){
		echo '<meta http-equiv="refresh" content="3; URL=/">';
	}
	$abfrage = "Select count(*) a from Vereine where Vereinsname='$vereinsname';";
	$ergebnis = mysqli_query($db,$abfrage) OR die(mysqli_error($db));
	$zeile = mysqli_fetch_assoc($ergebnis);
	if($zeile['a']==0){
		$abfrage = "Insert into Vereine values('$vereinsname',0);";
		$ergebnis = mysqli_query($db,$abfrage) OR die(mysqli_error($db));
	}
	echo "</head>";
	echo "<body>";

	if($vereinsname == ''){
		echo "You have to pick a team to vote !";
	}else{
		$abfrage = "UPDATE Vereine SET Stimmen = Stimmen +1 WHERE Vereinsname='$vereinsname';";
		$ergebnis = mysqli_query($db,$abfrage) OR die(mysqli_error($db));
		$abfrage = "Select SUM(Stimmen) sum  from Vereine;";
		$ergebnis =mysqli_query($db,$abfrage) OR die(mysqli_error($db));
		$count = mysqli_fetch_assoc($ergebnis);
		echo "You did it ! You actually voted ! You are one of the $count[sum] who voted ! Congratulations ! You are special !"; 
		echo "<br>And because you are so special, have a look at these awesome statistics!";
		echo "<br>";
		$abfrage = "SELECT v.Vereinsname, v.Stimmen, concat(FORMAT((100*v.Stimmen/s.Summe),2), '%') as Prozent FROM vereine v, (select sum(Stimmen) as Summe FROM vereine) s UNION SELECT 'Summe', sum(Stimmen), '100%' FROM vereine";
		$ergebnis =mysqli_query($db,$abfrage) OR die(mysqli_error($db));
		while($zeile = mysqli_fetch_assoc($ergebnis)){
			echo "<br>";
			echo " Verein: $zeile[Vereinsname] Stimmen: $zeile[Stimmen] Prozent: $zeile[Prozent])";
		}
		
	}
?>
</body>
</html>