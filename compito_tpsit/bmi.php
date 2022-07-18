<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta lang="it">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Body Mass Index</title>
</head>
<body>
<div class="w3-container-teal w3-center">
<h1 class="w3-teal" >Body Mass Index</h1>

<br><br><br>
<hr>
</div>
<br>
<?php
$bmi=0;

$bmi=$_GET["peso"]/($_GET["altezza"]*$_GET["altezza"]);

echo '<div class="w3-container w3-teal">'."\n";
echo "<p>Nome: ".$_GET["nome"]."</p>"."\n";
if($_GET["cognome"]=='')
{
echo "<p>Cognome non fornito</p>"."\n";

}
else
{
echo "<p>Cognome: ".$_GET["cognome"]."</p>"."\n";

}

echo '<table class="w3-table">'."\n";
echo "<tr>"."\n";
echo "<td>".$bmi."</td>"."\n";

echo "<td>"."\n";
if($bmi>'40.00')
{
echo "Obesità di III classe (gravissima)";
}
else if($bmi>'35.01'&&$bmi<='40.00')
{
echo "Obesità di II classe (grave)";

}
else if($bmi>'30.01'&&$bmi<='35')
{
echo "Obesità di I classe (moderata)";

}
else if($bmi>'25.01'&&$bmi<='30')
{
echo "Sovrappeso";

}
else if($bmi>'18.51'&&$bmi<='25.00')
{
echo "Regolare";

}
else if($bmi>'17.51'&&$bmi<='18.50')
{
echo "Leggermente sottopeso";

}
else if($bmi>'16.01'&&$bmi<='17.50')
{
echo "Sottopeso";

}
else if($bmi<'16.01')
{
echo "Grave magrezza (inedia)";

}
echo "</td>"."\n";

echo "</tr>"."\n";
echo "</table>"."\n";
echo "</div>"."\n";



?>
<p><a href="index.html" class="w3-button w3-red" style="margin: 10px;">Torna indietro</a></p>
   <div style=" position: fixed; left: 0; bottom: 0; width: 100%; background-color: teal; color: white; text-align: center;">
         <p>&copy; Mattia Daday</p>
         </div>
</body>
</html>
