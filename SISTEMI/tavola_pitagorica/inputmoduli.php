<!DOCTYPE html>
<html>
<head>
<title>input modulistica</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<!-- header pagina -->
<div class="w3-container w3-teal">
<br>
<h1 class="w3-text-aqua">Crea la tua Tavola Pitagorica</h1>
<br>
</div>
<hr>

<!-- moduli input -->
<div class="w3-container w3-teal">
<p class="w3-text-aqua">Inserisci righe e colonne</p>
<form method="get" action="index.php">
<!--
  <p>Inserisci numero righe  <input type="text" name="righe"></p>
  <p>Inserisci numero colonne  <input type="text" name="colonne"></p>
-->
<p>Inserisci numero righe:
<select name="righe"  class="w3-select">
<?php
for($i=1;$i<20;$i++)
{
	echo "<option>".$i."</option>";

}
?>
</select>
</p>
 <p>Inserisci numero colonne:>
 <select name="colonne" class="w3-select">
<?php
for($j=1;$j<20;$j++)
{
	echo "<option>".$j."</option>";

}
?>
</select>
</p>
<input type="submit" value="\\ crea tabella //">
</form>
<br>
</div>
<hr>
</body>
</html>