<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Account</title>
</head>
<body>
<!-- header -->
<div class="w3-container w3-teal">
<br>
<h1 class="w3-text-aqua">Gestione account</h1>
<br>
</div>
<hr>
<!-- gestione account -->
<div class="w3-container w3-teal">
<?php
echo "<p>Il tuo nome è --->".$_GET["nome"]."</p>";
echo "<p>Il tuo cognome è --->".$_GET["cognome"]."</p>";
echo "<p>La tua età è --->".$_GET["eta"]."</p>";
echo "<p>La tua provincia di nascita è --->".$_GET["prov"]."</p>";
?>
</div>
<hr>

<p><a href="input.php" class="w3-button w3-red">Torna Indietro</a></p>
</body>
</html>