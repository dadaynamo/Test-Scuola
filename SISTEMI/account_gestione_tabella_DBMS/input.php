<!DOCTYPE html>
<html>
<head>
<title>input modulistica</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<!-- header -->
<div class="w3-container w3-teal">
<br>
<h1 class="w3-text-aqua">Input Account</h1>
<br>
</div>
<hr>
<div class="w3-container">
<form method="get" action="index.php">
<p>il tuo nome: <input class="w3-input" type="text" name="nome" required></p>
<p>il tuo cognome: <input class="w3-input" type="text" name="cognome" required></p>
<p>la tua eta: <input class="w3-input" type="number" name="eta" min="1" max="99" required></p>
<p>la tua provincia di nascita:
<?php
echo '<select name="prov" action="index.php" class="w3-select">';
$conn=mysql_connect("localhost","root","") or die ("errore nella connessione");
$db=mysql_select_db("my_dadaymattiasito") or die ("errore di connessione database");

$q="select * from province";
$risultato=mysql_query($q) or die("errore connessione");

while($riga= mysql_fetch_assoc($risultato)){
echo '<option value="'.$riga["prov"].'">'.$riga["desprov"]."</option>\n";

}
echo "</select></p>";
mysql_close($conn);
?>

<p><input class="w3-button w3-green" type="submit" value="\\Procedi//"></p>
</form>
</div>
<br>
<br>
<br>
<hr>
</body>
</html>