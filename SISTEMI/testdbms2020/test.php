<?php
$pag=$_GET["pag"];
$conn=mysql_connect("127.0.0.1","root","") or die("ciao");
$db=mysql_select_db("my_dadaymattiasito") or die ("non selezionato");


if($pag=='')
{
header1();

$q="select * from film";
$rq=mysql_query($q) or die ("errore querY");

while($riga=mysql_fetch_assoc($rq))
{
echo "<p>".$riga["durata"]."</p>";
/*
echo $riga["idfilm"];
echo $riga["durata"];
echo $riga["trama"];
echo $riga["titolo"];
*/
}
$close=mysql_close($conn);
footergen();
closer();
}


//***************************************************************************************



function closer(){
echo "</body>"."\n";
echo "</html>"."\n";
}
function header1()
{
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
echo '<body>'."\n";

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












?>