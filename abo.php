<html>
<head>
  <meta charset="utf-8"/>
  <title>FUSSBALL-Abo!!!!</title>
   <style>
	table {border:solid; border-width:1px}
	td {border:solid; border-width:1px}
   </style>
</head>
<body>
	<form action="/abo_triggered.php" method="post">
		<table>
			<tr>
				<td><label for="name">Name</name></td>
				<td><input name="name" type="text" value="Mann" required></td>
			</tr><tr>
				<td><label for="vorname">Vorname</name></td>
				<td><input name="vorname" type="text" value="Muster" required></td>
			</tr><tr>
				<td><label for="email">E-Mail</name></td>
				<td><input name="email" type="email" value="muster@mann.de"></td>
			</tr><tr>
				<td><label for="mitglied">Vereinsmitgliedschaft</name></td>
				<td><input type="checkbox" name="mitglied"></td>
			</tr><tr>newsletterOutput
				<td><label for="liga">Liga</name></td>
				<td>
				
					<?php 
						mb_internal_encoding("UTF-8");
						$db = mysqli_connect("localhost", "root", "", "fussball");
						$abfrage = "Select name, id from liga;";
						$ergebnis = mysqli_query($db,$abfrage) OR die(mysql_error());
						while($zeile = mysqli_fetch_assoc($ergebnis)){
							echo "<input type='checkbox' name='$zeile[id]'>$zeile[name]<br>";
						}
					?>
				
				</td>
			</tr><tr>
				<td></td>
				<td><button type="submit">Eintragen</button></td>
			</tr>
		</table>
    <br>
	</form>
<!--	<form action="/vote.php" method="post">
		<input type="text" name="voted"/>
		<button type="submit">Hinzufügen und Abstimmen</button>
    </form>-->
</body>
</html>
