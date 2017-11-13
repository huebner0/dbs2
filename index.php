<html>
<head>
  <meta charset="utf-8"/>
  <title>FUSSBALL!!!!</title>
</head>
<body>
	<form action="/vote.php" method="post">
		<select name="voted">
		<option></option>
		<?php 
			mb_internal_encoding("UTF-8");
			$db = mysqli_connect("localhost", "root", "", "fussball");
			$abfrage = "Select Vereinsname from Vereine;";
			$ergebnis = mysqli_query($db,$abfrage) OR die(mysql_error());
			while($zeile = mysqli_fetch_assoc($ergebnis)){
			echo "<option value='$zeile[Vereinsname]'>".$zeile["Vereinsname"]."</option>";
			}
		?>
		</select>
		<button type="submit">Abstimmen</button>
    <br>
	</form>
	<form action="/vote.php" method="post">
		<input type="text" name="voted"/>
		<button type="submit">Hinzufügen und Abstimmen</button>
    </form>
</body>
</html>