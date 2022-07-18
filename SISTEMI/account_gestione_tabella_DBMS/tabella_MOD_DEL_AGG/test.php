<?php
$conn=mysql_connect("localhost","root","") or die ("errore connessione");
$db=mysql_select_db("my_dadaymattiasito") or die ("errore connessione");


//pag normale-------------------------------------------------------------------------------
if($_GET["pag"]=='')
{
  testata();
  header1();
  //pulsante nuovo utente
  echo '<p><a href="test.php?pag=newutente" class="w3-button w3-teal">+ AGGIUNGI UTENTE</a></p>';
  $q="select * from utenti order by nome";
  $ris=mysql_query($q) or die ("errore connessione3");

  echo '<table class="w3-table-all">';
  echo "<tr><th>NOME</th><th>COGNOME</th><th>ETA'</th><th>OPERAZIONI</th></tr>";
  while($riga=mysql_fetch_assoc($ris))
  {
      echo "<tr>";
      echo "<td>".$riga["nome"]."</td>";
      echo "<td>".$riga["cognome"]."</td>";
      echo "<td>".$riga["eta"]."</td>";
      echo "<td>"."<p>";
      echo	'<a href="test.php?pag=modutente&idut='.$riga["ID"].'" class="w3-button w3-text-white w3-teal">MOD.</a>';
      echo	'<a href="test.php?pag=cancutente&idut='.$riga["ID"].'" class="w3-button w3-teal w3-text-white">DEL.</a> ';
      echo "</p>"."</td>";   
      echo "</tr>";
  }
  echo "</table>";
  echo "<p>numero righe tabella</p>";
  $r=mysql_num_rows($ris);
  echo "<p>".$r."</p>";
  footer();
}

//pag con aggiunta utente---------------------------------------------------------------------------
else if($_GET["pag"]=='newutente'){
  testata();
  header1();  
  echo '<div class="w3-container w3-teal">';
  echo "<p>Compila il form per aggiungere nuovo utente</p>";
  echo "</div>";
  echo "<br>";
  echo "<hr>";
  echo '<form method="get" action="test.php">';
  echo '<p>il tuo nome: <input class="w3-input" type="text" name="nome" ></p>';
  echo '<p>il tuo cognome: <input class="w3-input" type="text" name="cognome" ></p>';
  echo '<p>la tua età: <input class="w3-input" type="number" name="eta"></p>';
  echo '<input type="hidden" name="pag" value="newutente2">';
  echo '<input class="w3-button w3-blue" type="submit" value="CONFERMA">';
  echo "</form>";
  echo "<br>";
  echo "<hr>";
  echo '<div class="w3-container w3-teal">';
  echo '<p><a href="test.php" class="w3-button w3-teal w3-text-aqua">Torna indietro</a></p>';
  echo "</div>";
  footer();
}

else if($_GET["pag"]=='newutente2'){
  $q="insert into utenti (nome,cognome,eta) values (";
  $q.="'".$_GET["nome"]."',";
  $q.="'".$_GET["cognome"]."',";
  $q.="'".$_GET["eta"]."')";
  $rq=mysql_query($q) or die ("errore di connessione"); 
 /* testata();
  header1();
 echo  '<div class="w3-container w3-teal">';
  echo '<p class="w3-text-aqua">Dati salvati con successo</p>';
 echo  "</div>";
 echo "<hr>";
 echo '<p><a href="test.php?pag=" class="w3-button w3-teal w3-text-aqua">Torna alla Home</a></p>';
  footer();
  */
  header("Location:test.php");
  
}
//pag con cancellazione utente-----------------------------------------------------------------------------
else if($_GET["pag"]=='cancutente'){
$q="delete from utenti where ID=".$_GET["idut"];
$rq=mysql_query($q) or die ("errore connessione");
header("location:test.php");
}

//pag con modifica utente----------------------------------------------------------------------------------
else if($_GET["pag"]=='modutente'){
//modifica di un utente
$q = "select * from utenti where ID=".$_GET["idut"];
$rq = mysql_query($q) or die("errore con il recupero dei dati utente");
$utente = mysql_fetch_assoc($rq);
testata();
header1();
echo "<h1>Modifica di un utente</h1>\n";
echo '<p><a href="test.php" class="w3-button w3-green">Torna alla home</a></p>'."\n";
echo '<form method="get" action="test.php">'."\n";
echo '<p>Nome: <input type="text" name="nome" value="'.htmlspecialchars($utente["nome"]).'" class="w3-input"></p>'."\n";
echo '<p>Cognome: <input type="text" value="'.htmlspecialchars($utente["cognome"]).'" name="cognome" class="w3-input"></p>'."\n";
echo '<p>Età: <input type="number" value="'.htmlspecialchars($utente["eta"]).'" name="eta" class="w3-input"></p>'."\n";
echo '<input type="hidden" name="pag" value="modutente2">'."\n";
echo '<input type="hidden" name="idut" value="'.$_GET["idut"].'">'."\n";
echo '<p><input type="submit" class="w3-button w3-green" value="SALVA"></p>'."\n";
echo "</form>\n";
footer();



}
//pag modifica2 utenti--------------------------------------------------------------------------------------
else if($_GET["pag"]=='modutente2'){
$q = "update utenti set ";
$q.= "nome='".mysql_real_escape_string(html_entity_decode($_GET["nome"]))."',";
$q.= "cognome='".mysql_real_escape_string(html_entity_decode($_GET["cognome"]))."',";
$q.= "eta='".mysql_real_escape_string(html_entity_decode($_GET["eta"]))."' ";
$q.= "where ID=".$_GET["idut"];
$ris = mysql_query($q) or die("errore con il salvataggio delle modifiche");
header("Location:test.php");
}
mysql_close($conn);


//FUNZIONI*********************************************************************************************
function testata(){
  echo "<!DOCTYPE html>";
  echo "<html>";
  echo "<head>";
  echo '<meta charset="UTF-8">';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
  echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">';
  echo "<title>Test Tabella DBMS</title>";
  echo "</head>";
  echo "<body>";
}

function header1(){
//header------------------------------------------------------------------------------------
  echo '<div class="w3-container w3-teal">';
  echo '<h1 class="w3-text-aqua">Gestione Tabella DBMS</h1>';
  echo "</div>";
  echo "<br>";
  echo "<hr>";
}
function footer(){
  echo "</body>";
  echo "</html>";
}
//**********************************************************************************************************
?>