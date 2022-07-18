<?php
$pag=$_GET["pag"];

//********************************************************************************************************************************************************************************************************
function testata(){
echo "<!DOCTYPE html>"."\n";
echo "<html>"."\n";
echo "<head>"."\n";
echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">'."\n";
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">'."\n";
echo '<meta charset="UTF-8">'."\n";
echo '<meta lang="it">'."\n";
echo "<title>index.php</title>"."\n";
echo "</head>"."\n";
echo '<body class="w3-cyan">'."\n";
}

function footer1(){
echo "</body>"."\n";
echo "</html>"."\n";
}
function header1()
{

echo '<div class="w3-container w3-header w3-cyan">'."\n";
echo '<h1 class="w3-h1 w3-center w3-blue">HOME PAGE</h1>'."\n";
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
echo "</div>"."\n";

}

//********************************************************************************************************************************************************************************************************
if ($_GET["pag"]=='')
{
testata();
header1();
echo '<div class="w3-container  w3-blue">'."\n";
echo '<div class="w3-container w3-half w3-blue">'."\n";
echo "<fieldset>\n";
echo "<legend> modulirddddddddddddddddddddddddd</legend>"."\n";
echo '<form method="get" action="form.php">'."\n";
echo '<p>inserisci nome --> <input type="text" name="nome" ></p>'."\n";
echo '<p>inserisci cognome --> <input type="text" name="cognome" ></p>'."\n";
echo '<p>inserisci età --> <input type="number" min="10" max="100" name="eta" ></p>'."\n";
echo '<p>inserisci colore preferito --> <input type="color" name="colore"></p>'."\n";
echo '<input type="date" name="date" ">'."\n";
echo '<input type="time" name="time" >'."\n";
echo '<input type="email" name="email">'."\n";
echo '<input type="tel" name="tel" >'."\n";
echo '<input type="url" name="url">'."\n";
echo '<input type="search" name="search">'."\n";
echo '<input type="range" name="range"  min="10" max="100">'."\n";
echo '<input type="file" name="file" >'."\n";
echo '<input type="checkbox" name="checkbox" value="check1" >'."\n";
echo '<input type="checkbox" name="checkbox" value="check2" >'."\n";
echo '<input type="password" name="password" >'."\n";
echo '<input type="radio" name="radio" value="m" >'."\n";
echo '<input type="radio" name="radio" value="f" >'."\n";
echo '<input type="hidden" name="pag" value="stamp" >'."\n";

echo '<input class="w3-button w3-cyan " type="submit" name="conferma">'."\n"; 
echo "</form>"."\n";
echo "</fieldset>\n";










echo '<label for="sceltastag">Scegli una stagione:</label>'."\n";
echo '<select id="sceltastag" name="stagione">'."\n";
echo '<optgroup label="Stagioni calde">'."\n";
echo '<option value=“1”>Primavera</option>'."\n";
echo '<option value=“2”>Estate</option>'."\n";
echo '</optgroup>'."\n";
echo '<optgroup label="Stagioni fredde">'."\n";
echo '<option value=“3”>Autunno</option>'."\n";
echo '<option value=“4”>Inverno</option>'."\n";
echo '</optgroup>'."\n";
echo '</select>'."\n";


















echo "<br>"."<br>"."<br>"."\n";
echo "</div>"."\n";

footer1();
}
if ($_GET["pag"]=='stamp')
{
testata();
header1();




footer1();
}


?>