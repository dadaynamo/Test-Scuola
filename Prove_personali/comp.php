<?php

function header1(){

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title></title>";
echo '<meta charset="UTF-8">';
echo '<meta lang="it">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" type="text/css">';
echo "</head>";
echo "<body>";

}

function closer()
{

echo "</body>";
echo "</html>";

}

$pag=$_GET["pag"];

if ( $pag=='')
{
header1();
echo '<div class="w3-container w3-teal " >';
echo '<h1 class="w3-center">inserisci valori</h1>';
echo '</div>';
echo '<br><br><hr>';
echo '<div class="w3-container w3-teal " >';
echo '<form method="get" action="comp.php">';
echo '<p>inserisci nickname --> <input type="text" max="20" min="0" name="nick" required></p>';
echo '<p>inserisci comune --><input type="text" max="30" min="0" name="comune" required></p>';
echo '<p>insersci provincia</p>';
echo '<div class="w3-container ">';
echo '<div class="w3-container w3-half">';
echo '<select name="provincie" class="w3-select" required>';
echo '<option value="te">Teramo</option>';
echo '<option value="pe">Pescara</option>';
echo '<option value="ch">Chieti</option>';
echo '<option value="aq">LAquila</option>';
echo "</select>";
echo "</div>";
echo '<div class="w3-container w3-half">';
echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
echo "</div>";
echo "</div>";
echo "<br";
echo "<p>inserisci sesso</p>";

echo '<p>M <input type="radio" name="sesso" value="M" class="w3-radio" required></p>';
echo '<p>F <input type="radio" name="sesso" value="F" class="w3-radio" required></p>';
echo '<p>servizio1 <input type="checkbox" name="ser[]" value="s1" ></p>';
echo '<p>servizio2 <input type="checkbox" name="ser[]" value="s2" ></p>';
echo '<p>servizio3 <input type="checkbox" name="ser[]" value="s3" ></p>';

echo '<p>insersci eta --><input type="number" min="12" max="20" name="eta" required> </p>';
echo '<p> temperatura corporea --><input type="number" min="0" max="60"  name="temp"  required> </p>';

echo '<p><input type="hidden" value="stamp" name="pag"></p>';
echo '<p><input type="submit" value="conferma" class="w3-button w3-green"></p>';


echo "</form>";
echo "</div>";
closer();

}

else if ( $pag=='stamp')
{
header1();

echo '<table class="w3-table-all">';
echo '<tr >';
echo "<td>nickname</td>";
echo "<td>comune</td>";
echo "<td>provincia</td>";
echo "<td>sesso</td>";
echo "<td>servizi</td>";
echo "<td>età</td>";
echo "<td>temperatura</td>";
echo "</tr>";

echo "<tr>";
echo '<td>'.$_GET["nick"].'</td>';
echo "<td>".$_GET["comune"]."</td>";
echo '<td>'.$_GET["provincie"].'</td>';

echo '<td>'.$_GET["sesso"].'</td>';

/*
$dest=$_GET["servizio"];
if(isset($dest))
{
echo "<td>";
foreach($dest as $key => $value)
{
echo $value." ";
}
echo "</td>";
}
*/
echo "<td>";
$destinations= $_GET['ser'];

if(isset($destinations)) {
foreach ($destinations as $key => $value)
{

echo $value." ";

}

}
echo "</td>";
//--------------
echo '<td>'.$_GET["eta"].'</td>';
echo '<td>'.$_GET["temp"].'</td>';




echo "</tr>";
echo "</table>";

$destinations= $_GET['serv'];

if(isset($destinations)) {
echo 'You have chosen:' . '<br>' . '<br>';
foreach ($destinations as $key => $value)
{
echo $value . '<br>';
}
}
else 
{
echo "You haven't selected any destination";
}
closer();
}
















?>