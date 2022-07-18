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
function header2(){

echo '<div class="w3-container w3-header w3-cyan">'."\n";
echo '<h1 class="w3-h1 w3-center w3-blue">DATI RICEVUTI</h1>'."\n";
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
echo "</div>"."\n";

}
function header3(){

echo '<div class="w3-container w3-header w3-cyan">'."\n";
echo '<h1 class="w3-h1 w3-center w3-blue">GIOCA CON NOI</h1>'."\n";
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
echo '<form method="get" action="index.php">'."\n";
echo '<p>inserisci nome --> <input type="text" name="nome" required></p>'."\n";
echo '<p>inserisci cognome --> <input type="text" name="cognome" required></p>'."\n";
echo '<p>inserisci età --> <input type="number" min="10" max="100" name="eta" required></p>'."\n";
echo '<p>inserisci colore preferito --> <input type="color" name="colore" required></p>'."\n";
echo '<input type="hidden" name="pag" value="stamp">'."\n";
echo '<input class="w3-button w3-cyan " type="submit" name="conferma">'."\n"; 
echo "</form>"."\n";
echo "<br>"."<br>"."<br>"."\n";
echo "</div>"."\n";


echo '<div class="w3-container w3-half w3-blue">'."\n";
echo "<br>"."\n";
echo "<fieldset><p>Lorem Ipsum è semplicemente un testo fittizio dell'industria della stampa e della 
composizione. Lorem Ipsum è stato il testo fittizio standard del settore sin dal 1500, quando uno stampatore
sconosciuto ha preso una cambusa di caratteri e l'ha mescolata per creare un libro di campioni. È sopravvissuto
non solo a cinque secoli, ma anche al passaggio alla composizione elettronica, rimanendo sostanzialmente invariato.
È stato reso popolare negli anni '60 con il rilascio di fogli Letraset contenenti passaggi di Lorem Ipsum e, più recentemente,
con software di desktop publishing come Aldus PageMaker, comprese le versioni di Lorem</p></fieldset>";
echo "</div>"."\n";
echo "</div>"."\n";
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
echo '<p class="w3-center" style="margin: 20px"><a href="index.php?pag=gioco" class="w3-button w3-blue">GIOCA CON NOI</a></p>'."\n";
footer1();
}
//******************************************************************************************************************************************************************************************************************
else if ($_GET["pag"]=='stamp')
{
testata();
header2();
echo '<div class="w3-container  w3-blue">'."\n";
echo "<p>NOME UTENTE -->".$_GET["nome"]."</p>"."\n";
echo "<p>COGNOME UTENTE -->".$_GET["cognome"]."</p>"."\n";
echo "<p>ETA"."'"." UTENTE -->".$_GET["eta"]."</p>"."\n";
echo "<p>COLORE UTENTE -->".$_GET["colore"]."</p>"."\n";

echo "</div>"."\n";
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
echo '<p class="w3-right-align" style="margin: 20px"><a href="index.php?pag=" class="w3-button w3-blue">torna indietro</a></p>'."\n";
footer1();
}

//********************************************************************************************************************************************************************************************************
else if ($_GET["pag"]=='gioco')
{
testata();
header3();
echo '<form method="get" action="index.php">'."\n";
echo '<p>NOME GIOCATORE --> <input type="text" name="nome"></p>'."\n";
echo '<p>NUMERO CELLE   --> <input type="number" name="numcelle" min="2" max="20" required></p>'."\n";

echo '<input type="hidden" name="pag" value="roundgame">'."\n";
echo '<p><input type="submit" value="INIZIA ROUND"</p>'."\n";
echo "</form>"."\n";


footer1();
}
//*******************************************************************************************************************************************************************************

else if ($_GET["pag"]=='roundgame')
{
  testata();
  header3();
  $goalr=rand(2,$_GET["numcelle"]);
  $goalc=rand(2,$_GET["numcelle"]);
  $num=$_GET["numcelle"];
  $nome=$_GET["nome"];
  echo '<div class="w3-container w3-center">'."\n";
  echo '<table class="w3-table-all">'."\n";
  for($i=1;$i<=$_GET["numcelle"];$i++)
	{
		echo "<tr>"."\n";

		for($k=1;$k<=$_GET["numcelle"];$k++)
		{

			if($goalr==$i&&$goalc==$k)
			{
 // echo "<td>".$i*$k."</td>"."\n";
				echo '<td><p><a href="index.php?pag=gamend&nome='.$nome.'" class="w3-button">'.$i*$k.'</a> </p></td>'."\n";
			}
			else{
				echo '<td><p><a href="'.'index.php?pag=roundgame&numcelle='.$num.'" class="w3-button">'.$i*$k.'</a> </p></td>'."\n";
			}
		}
	echo "</tr>"."\n";

}

echo "</table>"."\n";

echo "</div>";
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
echo '<p class="w3-right-align" style="margin: 20px"><a href="index.php?pag=" class="w3-button w3-blue">torna indietro</a></p>'."\n";
footer1();
}

else if ($_GET["pag"]=='gamend'){
 testata();
  header3();
  echo "<hr>"."\n";
  echo "<br>"."<br>"."<br>"."\n";
 echo '<div class="w3-container w3-center">'."\n";
 echo "<h1>HAI VINTOOOO ".$_GET["nome"]."!!!!</h1>"."\n";


echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
echo '<p class="w3-right-align" style="margin: 20px"><a href="index.php?pag=" class="w3-button w3-blue">torna indietro</a></p>'."\n";
footer1();

}













?>