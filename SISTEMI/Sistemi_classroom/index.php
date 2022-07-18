<?php
//HOME PAGE********************************************************************************************
if($_GET["pag"]=='')
{
headergen();
titologen();
//tasto + sopra tabella -----------------------------------------------------------------------------
echo '<div class="w3-container w3-text-aqua">'."\n";
echo '<p class="w3-text-teal"><a style="border-radius:100px" class="w3-button
w3-teal" href="index.php?pag=newfilm1">&plus;</a> AGGIUNGI NUOVO FILM</p>'."\n";
echo "</div>"."\n";



//generazione tabella con dati------------------------------------------------------------------------
$q= "select * from film";
$rq=mysql_query($q) or die ("errore query");
echo '<table class="w3-table-all">'."\n";
echo "<tr><th>TITOLO</th><th>TRAMA</th><th>DURATA</th><th>ID</th><th>OPERAZIONI</th></tr>";
while($riga=mysql_fetch_assoc($rq))
{
	echo "<tr>"."\n";
    echo "<td>".$riga["titolo"]."</td>"."\n";
	echo "<td>".$riga["trama"]."</td>"."\n";
    echo "<td>".$riga["durata"]."</td>"."\n";
    echo "<td>".$riga["idfilm"]."</td>"."\n";
	echo "<td>".
    '<p><a href="index.php?pag=modfilm1&idfilm='.$riga["idfilm"].'" class="w3-button w3-teal w3-text-aqua">MOD.</a>
   <a href="index.php?pag=cancfilm1&idfilm='.$riga["idfilm"].'" class="w3-button w3-teal w3-text-aqua">DEL.</a>
                 </p>'."\n";
    
    
   
	echo "</tr>"."\n";
}
	echo "</table>"."\n";

footergen();
}
//INSERIMENTO film**************************************************************************************
if($_GET["pag"]=='newfilm1'){
headergen();
titologen1();

ins_header();

echo '<form method="GET" action="index.php">'."\n";
echo '<p>TITOLO  <input name="titolo" type="text" class="w3-input w3-light-grey w3-text-teal" placeholder="Inserisci qui il titolo" required ></p>'."\n";
echo '<p>TRAMA  <input name="trama" type="text" class="w3-input w3-light-grey w3-text-teal" placeholder="Inserisci qui la trama" required ></p>'."\n";
echo '<p>DURATA <input name="durata" type="number" min="30" max="300" class="w3-input w3-light-grey w3-text-teal" placeholder="Inserisci qui la durata espressa in minuti" required ></p>'."\n";
echo '<input type="hidden" name="pag" value="newfilm2">';
echo '<input type="submit" value="|CONFERMA|"  class="w3-button w3-teal">'."\n";
echo "</form>"."\n";


footergen();
}
if($_GET["pag"]=='newfilm2'){
headergen();
titologen();

  $q="insert into film (titolo,trama,durata) values (";
  $q.="'".mysql_escape_string($_GET["titolo"])."',";
  $q.="'".mysql_escape_string($_GET["trama"])."',";
  $q.="'".mysql_escape_string($_GET["durata"])."')";
  $rq=mysql_query($q) or die ("errore di connessione"); 
  echo '<div class="w3-container w3-center">'."\n";
echo '<h4 class="w3-h2 w3-text-teal">Salvataggio completato</h4>'."\n";
echo '<p><a href="index.php" class="w3-button w3-text-aqua w3-teal">|TORNA ALLA HOME|</a></p>'."\n";
//echo "<br>\n";
echo "<hr>\n";
echo "</div>\n";

footergen();
}

//cancellazione film**************************************************************************************
if($_GET["pag"]=='cancfilm1'){

headergen();
titologen();
echo "<br>\n";
echo '<div class="w3-container w3-center">'."\n"; 
echo '<p class="w3-center w3-text-aqua w3-teal">SEI SICURO DI ELIMINARE QUESTO FILM &quest;</p>'."\n"; 
echo '<p><a href="index.php" class="w3-button w3-green w3-text-white">NO</a>
&nbsp;&nbsp;&nbsp;<a href="index.php?pag=cancfilm2&idfilm='.$_GET["idfilm"].'"'. 'class="w3-button w3-red w3-text-white" >SI</a></p>'."\n";
echo "</div>\n";

footergen();
}
if($_GET["pag"]=='cancfilm2'){
headergen();
titologen();

$q='delete from film where idfilm='.$_GET["idfilm"]."\n";
$rq=mysql_query($q) or die ("errore query di eliminazione");
header("location:index.php");

footergen();
}

//modifica film ********************************************************************************************************************************
if($_GET["pag"]=='modfilm1'){
headergen();
titologen1();
mod_header();

$q = "select * from film where idfilm=".$_GET["idfilm"];
$rq = mysql_query($q) or die("errore con il recupero dei dati utente");
$film = mysql_fetch_assoc($rq);

echo '<form method="GET" action="index.php">'."\n";
echo '<p>TITOLO  <input name="titolo" type="text" class="w3-input w3-light-grey w3-text-teal" value="'.htmlspecialchars($film["titolo"]).'" required ></p>'."\n";
echo '<p>TRAMA  <input name="trama" type="text" class="w3-input w3-light-grey w3-text-teal" value="'.htmlspecialchars($film["trama"]).'" required ></p>'."\n";
echo '<p>DURATA <input name="durata" type="number" min="30" max="300" class="w3-input w3-light-grey w3-text-teal" value="'.htmlspecialchars($film["durata"]).'" required ></p>'."\n";
echo '<input type="hidden" name="pag" value="modfilm2">';
echo '<input type="hidden" name="idfilm" value="'.$_GET["idfilm"].'">'."\n";
echo '<input type="submit" value="|CONFERMA|"  class="w3-button w3-teal">'."\n";
echo "</form>"."\n";

footergen();


}

if($_GET["pag"]=='modfilm2'){
headergen();
mod_header();
$q = "update film set ";
$q.= "titolo='".mysql_real_escape_string(html_entity_decode($_GET["titolo"]))."',";
$q.= "trama='".mysql_real_escape_string(html_entity_decode($_GET["trama"]))."',";
$q.= "durata='".mysql_real_escape_string(html_entity_decode($_GET["durata"]))."' ";
$q.= "where idfilm=".$_GET["idfilm"];
$ris = mysql_query($q) or die("errore con il salvataggio delle modifiche".$q.mysql_error());

header("location:index.php");
footergen();
}



//funzioni***************************************************************************************
function headergen()
{
  echo "<!DOCTYPE html>"."\n";
      echo "<html>"."\n";
          echo "<head>"."\n";

              echo "<title>GESTIONE FILM</title>";    
              echo '<link rel="stylesheet" href="w3.css" type="text/css">'."\n";
                  echo '<meta name="viewport" content="width=device-width, initial-scale="1">'."\n";
              echo '<link rel="stylesheet" href="mycss.css" type="text/css">'."\n";
    
              echo '<meta charset="UTF-8">'."\n";

          echo "</head>"."\n";

          echo "<body>"."\n";
			$r=mysql_connect("localhost","root","") or die ("errore connect");
            $db=mysql_select_db("my_dadaymattiasito") or die ("errore selezione database");
}        
             
function footergen()
{
   //footer--------------------------------------------------------------------------------

          echo '<div class="mattiafooter">'."\n";
          echo "<p>&copy Mattia Daday</p>"."\n";
          echo "</div>"."\n"; 
          
          mysql_close($r);
          echo "</body>"."\n";
      echo "</html>"."\n";
	
}

function titologen(){
	echo '<div class="w3-container w3-teal">'."\n";
    	echo '<h1 class="w3-text-white">Gestione Film</h1>'."\n";	
    echo "</div>";
    
	echo "<br>";
    echo "<hr>";


}
function titologen1(){

	echo '<div class="w3-container w3-teal">'."\n";
    	echo '<h1 class="w3-text-white">Gestione Film</h1>'."\n";	
    echo "</div>";
    echo "<br>"."\n";
	tastohome();
    echo "<hr>";


}
function ins_header()
{
echo '<div class="w3-teal w3-container w3-center w3-text-white">'."\n";
echo "<p>INSERISCI NUOVO FILM IN TABELLA</p>\n";
echo "</div>\n";
echo "<hr>";

}
function mod_header()
{
echo '<div class="w3-teal w3-container w3-center w3-text-white">'."\n";
echo "<p>MODIFICA FILM SELEZIONATO</p>\n";
echo "</div>\n";
echo "<hr>";
}
function tastohome()
{

echo '<div class="w3-class w3-center w3-light-grey">'."\n";

echo "<p>&#x0003D;&#x0003D;&gt; ".'<a href="index.php">'.'<img src="foto/logo.png" class="w3-image" style="width:5%;height:5%;">'."</a>"." &lt;&#x0003D;&#x0003D;"."</p>\n";
echo "</div>\n";
}
?>

