<?php

//cod connessione e db
//******************************************************************************************
$conn=mysql_connect("127.0.0.1","root","") or die ("appeso connessione");
$db=mysql_select_db("my_dadaymattiasito") or die ("errore selezione database");
//******************************************************************************************

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
echo '<body class="w3-khaki">'."\n";
}

function closer(){
echo "</body>"."\n";
echo "</html>"."\n";
}
function header1()
{

echo '<div class="w3-">'."\n";
echo '<h1 class="w3-teal w3-center" >HOME Market</h1>'."\n";
/*
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
*/
echo "</div>"."\n";

}
function headernew()
{

echo '<div class="w3-">'."\n";
echo '<h1 class="w3-teal w3-center" >INSERT Market</h1>'."\n";
/*
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
*/
echo "</div>"."\n";

}
function headermod()
{

echo '<div class="w3-">'."\n";
echo '<h1 class="w3-teal w3-center" >MODIFIC Market</h1>'."\n";
/*
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
*/
echo "</div>"."\n";

}
function headerdel()
{

echo '<div class="w3-">'."\n";
echo '<h1 class="w3-teal w3-center" >DELETE Market</h1>'."\n";
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

//***************************************************************************************************************************************************************
//***************************************************************************************************************************************************************
//***************************************************************************************************************************************************************


$pag=$_GET["pag"];

if($pag=='')
{
testata();
//header home market
header1();
echo "<br>"."\n";

//tasto aggiungi nuovo prodotto
echo '<div class="w3-container">'."\n";
echo '<p><a href="market.php?pag=newmarket" class="w3-button w3-teal w3-round">+</a> Inserisci Prodotto</p>'."\n";
echo "</div>"."\n";
echo '<div class="w3-container">'."\n";

//creazione tabella
$q='select * from dipendenti';
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
//echo '<td><a href="market.php?pag=modmarket&idmarket='.$riga["idmarket"].'" class="w3-button w3-teal w3-round">mod</a><a href="market.php?pag=delmarket&idmarket='.$riga["idmarket"].'" class="w3-button w3-red w3-round">del</a></td>'."\n";

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
/*
else if($pag=='newmarket')
{
testata();
headernew();
echo "<br>"."\n";
echo "<br>"."\n";
//creazione form
echo '<div class="w3-container w3-teal">'."\n";
echo '<form method="get" action="market.php">'."\n";
echo "<p>Inserisci nome del prodotto</p>"."\n";
echo '<input type="text" maxlength="50" minlength="5" name="nome" class="w3-input">'."\n";
echo "<p>Inserisci prezzo listino del prodotto</p>"."\n";
echo '<input type="number" max="50" min="0" step="0.01" name="prezzo" class="w3-number">'."\n";
echo '<input type="hidden" name="pag" value="newmarket2">'."\n";
echo '<p><input type="submit" class="w3-button w3-khaki"  value="INSERISCI"></p>'."\n";
echo "</form>"."\n";
echo "</div>";

footergen();
closer();
}
else if($pag=='newmarket2'){

$q="insert into market (nome,prezzo) values (";
  $q.="'".$_GET["nome"]."',";
  $q.="'".$_GET["prezzo"]."')";

$rq=mysql_query($q) or die ("errore query inserimento");
header('Location: market.php');

}


if ($pag=='modmarket')
{
testata();
headermod();
echo "<br>"."\n";
echo "<br>"."\n";
$q='select *  from market where idmarket='.$_GET["idmarket"];
$rq=mysql_query($q) or die ("errore recupero record in mod utente");
$riga=mysql_fetch_assoc($rq);
//creazione form
echo '<div class="w3-container w3-teal">'."\n";
echo '<form method="get" action="market.php">'."\n";
echo "<p>Modifica nome del prodotto</p>"."\n";
echo '<input type="text" maxlength="50" minlength="5" name="nome" value="'.$riga["nome"].'" class="w3-input">'."\n";
echo "<p>Modifica prezzo listino del prodotto</p>"."\n";
echo '<input type="number" max="50" min="0" step="0.01" name="prezzo" value="'.$riga["prezzo"].'" class="w3-number">'."\n";
echo '<input type="hidden" name="pag" value="modmarket2">'."\n";
echo '<input type="hidden" name="idmarket" value="'.$_GET["idmarket"].'">'."\n";
echo '<p><input type="submit" class="w3-button w3-khaki"  value="INSERISCI"></p>'."\n";
echo "</form>"."\n";
echo "</div>";

footergen();
closer();
}
if ($pag=='modmarket2')
{
echo $_GET["nome"];
echo $_GET["prezzo"];
echo $_GET["pag"];
echo $_GET["idmarket"];


$q = "update market set ";
$q.= "nome='".$_GET["nome"]."',";
$q.= "prezzo='".$_GET["prezzo"]."' ";
$q.= "where idmarket=".$_GET["idmarket"];
$rq=mysql_query($q) or die ("errore query mod 2");
header('Location: market.php');

}

if($pag=='delmarket')
{

testata();
headerdel();
$q='select * from market where idmarket="'.$_GET["idmarket"].'"';
$rq=mysql_query($q);

$riga=mysql_fetch_assoc($rq);
$num=mysql_num_rows($rq);




echo '<div class="w3-container w3-half w3-teal">'."\n";
if($num==1)
{
echo '<table class="w3-table w3-border">'."\n";
echo "<tr>"."\n";
echo "<th>ID PRODOTTO</th><th>Nome Prodotto</th><th>Prezzo Vendita</th>"."\n";
echo "</tr>"."\n";
echo "<tr>"."\n";
echo "<td>".$riga["idmarket"]."</td>"."\n";
echo "<td>".$riga["nome"]."</td>"."\n";
echo "<td>".$riga["prezzo"]."</td>"."\n";
echo "</tr>"."\n";

echo "</table>"."\n";
echo '<p class="w3-center"><a href="market.php?pag=delmarket2&idmarket='.$_GET["idmarket"].'" class="w3-button w3-red">SI</a> <a href="market.php"  class="w3-button w3-grey">NO</a></p>';

}
else{
echo '<p class="w3-center">gia stato cancellato</p>';

}
echo "</div>"."\n";

footergen();
closer();
}
if($pag=='delmarket2')
{

$q='DELETE FROM market where idmarket="'.$_GET["idmarket"].'"';
$rq=mysql_query($q);

header('Location: market.php');

}
*/


?>