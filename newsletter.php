<html>
<head>
  <meta charset="utf-8"/>
  <title>Newsletter!!!!</title>
   <style>
	table {border:solid; border-width:1px}
	td {border:solid; border-width:1px}
   </style>
</head>
<body>
	<h2>Newsletter</h2>
	<form action="/newsletterOutput.php" method="post">
		<table>
			<tr>
				<td><label for="fan">Fan</name></td>
				<td>
					<select name="fan">
						<option value=-1>-</option>
							<?php 
								mb_internal_encoding("UTF-8");
								$db = mysqli_connect("localhost", "root", "", "fussball");
								$abfrage = "Select name, vorname, email from abo order by name, vorname, email;";
								$ergebnis = mysqli_query($db,$abfrage) OR die(mysql_error());
								while($zeile = mysqli_fetch_assoc($ergebnis)){
									echo "<option value='$zeile[email]'>$zeile[name], $zeile[vorname] ($zeile[email])</option>";
								}
							?>
					</select>
				</td>
			</tr><tr>
				<td><label for="mitglied">Vereinsmitgliedschaft</name></td>
				<td>
					<select name="mitglied">
						<option>egal</option>
						<option value="0">keine Vereinsmitgliedschaft</option>
						<option value="1">Vereinsmitgliedschaft</option>
					</select>
				</td>
			</tr><tr>
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
				<td><label for="betreff">Betreff</name></td>
				<td><input name="betreff" size="48"></input></td>
			</tr><tr>
				<td><label for="nachricht">Nachricht</name></td>
				<td><textarea name="nachricht" rows="10" cols="50"></textarea></td>
			</tr><tr>
				<td></td>
				<td><button type="submit">Verschicken</button></td>
			</tr>
		</table>
	</form>
<!--	<form action="/vote.php" method="post">
		<input type="text" name="voted"/>
		<button type="submit">Hinzufügen und Abstimmen</button>
    </form>-->
</body>
</html>
