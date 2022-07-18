<?php

//cod connessione e db
//******************************************************************************************
$conn=mysql_connect("mysql.hosting.com","alunnoiis","lu1g1d1s4v014") or die ("errata connessione");
$db=mysql_select_db("verificatpsit") or die ("errore selezione database");
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


$pag = filter_input(INPUT_GET,'pag',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if($pag=='')
{
testata();
//header home market
header1();
echo "<br>"."\n";


//creazione tabella
$q='select * from dipendenti ORDER BY cognome DESC';
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

echo '<td><a href="test.php?pag=inf&iddip='.$riga["iddip"].'" class="w3-button w3-teal w3-round">dettaglio</a><a href="test.php?pag=del&iddip='.$riga["iddip"].'" class="w3-button w3-red w3-round">elimina</a></td>'."\n";

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





    if($pag=="del"){
    
    $idd= filter_input(INPUT_GET,'iddip',FILTER_VALIDATE_INT);
    
    $q = "select * from dipendenti where iddip=".$idd;
    $rq = mysql_query($q) or die("errore con sas");
    
    $q1="select * from partecipa where rdip=".$idd;
    $rq1 = mysql_query($q1) or die("errore con sas");
  
  $partecipa=mysql_fetch_assoc($rq1);
   
   $rcorso=$partecipa["rcorso"];
    
    $q2="select * from corsi where idcorso=".$rcorso;
    $rq2 = mysql_query($q1) or die("errore con sas");

$corso=mysql_fetch_assoc($rq2);

$qel='DELETE FROM corsi where idcorso="'.$corso["idcorso"].'"';
$rqel=mysql_query($qel);
$qel2='DELETE FROM partecipa where rdip="'.$idd.'"';
$rqe2=mysql_query($qel);
$qel2='DELETE FROM dipendenti where iddip="'.$idd.'"';
$rqe2=mysql_query($qel);

header('Location: test.php');

 	
    }
        if($pag=="inf"){
testata();
//header home market
header1();
echo "<br>"."\n";

    $idd= filter_input(INPUT_GET,'iddip',FILTER_VALIDATE_INT);
    
    $q = "select * from dipendenti where iddip=".$idd;
    $rq = mysql_query($q) or die("errore con sas");
  $dip=mysql_fetch_assoc($rq);  
    $q1="select * from partecipa where rdip=".$idd;
    $rq1 = mysql_query($q1) or die("errore con sas");
  
  $partecipa=mysql_fetch_assoc($rq1);
   
   $rcorso=$partecipa["rcorso"];
    
    $q2="select * from corsi where idcorso=".$rcorso;
    $rq2 = mysql_query($q1) or die("errore con sas");
$corso=mysql_fetch_assoc($rq2);

echo "<p>dipendente: ".$dip["nome"]." ".$dip["cognome"]."</p>";
echo "<p>partecipa ai seguenti corsi</p>";
while($rigacorso=$corso)
{


echo "<ul>";
echo "<li>".$riga["descorso"]." per un totale di ".$partecipa["ore"] ." ore</li>";
echo "</ul>";


}

footergen();
closer();   
        }


?>