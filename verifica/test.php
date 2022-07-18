<?php

function testata(){
echo "<!DOCTYPE html>"."\n";
echo "<html>"."\n";
echo "<head>"."\n";
echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">'."\n";
echo '<link rel="stylesheet" href="mycss.css" type="text/css">'."\n";
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">'."\n";
echo '<meta charset="UTF-8">'."\n";
echo '<meta lang="it">'."\n";
echo "<title>index.php</title>"."\n";
echo "</head>"."\n";
echo '<body class="w3-black">'."\n";
}

function closer(){
echo "</body>"."\n";
echo "</html>"."\n";
}
function header1()
{

echo '<div class="w3-">'."\n";
echo '<h1 class="w3-teal" >HOME PAGE</h1>'."\n";
/*
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
*/
echo "</div>"."\n";

}

function footergen()
{
   //footer--------------------------------------------------------------------------------

          echo '<div style=" position: fixed; left: 0; bottom: 0; width: 100%; background-color: teal; color: white; text-align: center;">'."\n";
          echo "<p>&copy; Mattia Daday</p>"."\n";
          echo "</div>"."\n"; 
}

//**************************************************************************************************************************************************************************

$pag = filter_input(INPUT_GET,'pag',FILTER_SANITIZE_FULL_SPECIAL_CHARS);



if($pag=='')
{
testata();
//header home dip
header1();
echo "<br>"."\n";

//tasto aggiungi nuovo prodotto
echo '<div class="w3-container">'."\n";
echo '<p><a href="market.php?pag=newmarket" class="w3-button w3-teal w3-round">+</a> Inserisci Prodotto</p>'."\n";
echo "</div>"."\n";
echo '<div class="w3-container">'."\n";

//creazione tabella
$q='SELECT * FROM dipendenti';
$rq=mysql_query($q);
$num=mysql_num_rows($rq);
echo '<table class="w3-table-all">'."\n";
echo "<tr>"."\n";
echo "<th>ID PRODOTTO</th><th>Nome Prodotto</th><th>Prezzo Vendita</th><th>Azioni</th>"."\n";
echo "</tr>"."\n";
while($riga=mysql_fetch_assoc($rq))
{
echo "<tr>"."\n";
echo "<td>".$riga["iddip"]."</td>"."\n";
echo "<td>".$riga["nome"]."</td>"."\n";
echo "<td>".$riga["cognome"]."</td>"."\n";
//echo '<td><a href="market.php?pag=infdip&iddip='.$riga["iddip"].'" class="w3-button w3-teal w3-round">mod</a><a href="market.php?pag=deldip&iddip='.$riga["iddip"].'" class="w3-button w3-red w3-round">del</a></td>'."\n";

echo "</tr>"."\n";
}
echo "</table>"."\n";
echo "</div>"."\n";
echo "<br>"."\n";
echo "<br>"."\n";
echo "<br>"."\n";
echo '<div class="w3-container w3-half w3-teal">'."\n";
echo "<h3>Info Market</h3>"."\n";
echo "<fieldset>"."\n";
echo "<p>Numero prodotti memorizzati: ".$num."</p>"."\n";
echo "</fieldset>"."\n";
echo "<br>"."\n";

echo "</div>"."\n";



footergen();
closer();


}



?>