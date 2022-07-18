<?php


if($_GET["pag"]=='')
{
    testata();
    headerh();
    echo '<div class="w3-container">'."\n";
    echo '<h3 class="w3-left">Visualizza la risposta cliccando i pulsanti desiderati</h3>'."\n";
    echo "</div>"."\n";
    echo "<hr>"."\n";
    echo '<div class="w3-container">'."\n";
    echo "<ul>"."\n";
    echo '<li><p>Quesito 1: Generate 100 numeri casuali e stamparli a video <a href="index.php?pag=ques1" class="w3-button w3-theme-d5">VAI</a></p></li>'."\n";
    echo '<li><p>Quesito 2: Stampare i divisori di un numero generato casualmente <a href="index.php?pag=ques2" class="w3-button w3-theme-d5">VAI</a></p></li>'."\n";
    echo '<li><p>Quesito 3: Creare un form di inserimento dati che converta i secondi in ore , minuti e secondi <a href="index.php?pag=ques3" class="w3-button w3-theme-d5">VAI</a></p></li>'."\n";
    echo '<li><p>Quesito 4: Ripetere il form con la conversione da decimale a binario <a href="index.php?pag=ques4" class="w3-button w3-theme-d5">VAI</a></p></li>'."\n";
    echo '<li><p>Quesito 5: Creare un form per l’inserimento del nome e cognome in una tabella <a href="index.php?pag=ques5" class="w3-button w3-theme-d5">VAI</a></p></li>'."\n";
    echo "</ul>"."\n";
    echo "</div>"."\n";
        
        echo "<br><br><br>"."\n";
    footergen();
    closer();    
}

if($_GET["pag"]=='ques1')
{
    testata();
    headerh();
    //tasto home
    echo '<div class="w3-container">'."\n";
    echo '<p><a href="index.php?pag=" class="w3-button w3-theme-d5 w3-left">HOME</a>&nbsp;<a href="index.php?pag=ques1" class="w3-button w3-theme-d5 w3-right">&olarr;</a></p>'."\n";
    echo "</div>"."\n"; 
//primo quesito
$x=0;
echo '<div class="w3-container">'."\n";
echo '<ol>'."\n";
while($x<100)
{
    $n=rand(0,500);
	echo "<li>&nbsp;&nbsp;".$n."</li>"."\n";
	$x++;

}
    echo "</ol>"."\n";
    echo "</div>"."\n";


    //tasto home
    echo '<div class="w3-container">'."\n";
    echo '<p><a href="index.php?pag=" class="w3-button w3-theme-d5 w3-left">HOME</a>&nbsp;<a href="index.php?pag=ques1" class="w3-button w3-theme-d5 w3-right">&olarr;</a></p>'."\n";
    echo "</div>"."\n";
    echo "<br><br><br>"."\n";
    footergen();
    closer();   
}
if($_GET["pag"]=='ques2')
{
    testata();
    headerh();
    
    //tasto home
    echo '<div class="w3-container">'."\n";
    echo '<p><a href="index.php?pag=" class="w3-button w3-theme-d5 w3-left">HOME</a>&nbsp;<a href="index.php?pag=ques2" class="w3-button w3-theme-d5 w3-right">&olarr;</a></p>'."\n";
    echo "</div>"."\n";    
    
    //secondo quesito
    $ncasual=rand(1,100);

echo "<p>numero casuale scelto : ".$ncasual."</p>\n";
$k=1;
echo '<div class="w3-container">'."\n";
echo '<ul type="square">'."\n";
while($k<=$ncasual)
{
	if($ncasual%$k==0)
	{
		echo "<li>".$k."</li>";
		$k++;
	}
	else
		$k++;
}
echo "</ul>"."\n";
echo "</div>"."\n";
    footergen();
    closer();       
} 

if($_GET["pag"]=='ques3')
{
    testata();
    headerh();

    //tasto home
    echo '<div class="w3-container">'."\n";
    echo '<p><a href="index.php?pag=" class="w3-button w3-theme-d5 w3-left">HOME</a>&nbsp;<a href="index.php?pag=ques3" class="w3-button w3-theme-d5 w3-right">&olarr;</a></p>'."\n";
    echo "</div>"."\n";    
        

    echo '<div class="w3-container">'."\n";
    echo "<h3>Inserisci Secondi</h3>"."\n";    
    echo '<form method="GET" action="index.php">'."\n";
    echo '<p><input type="number" name="n" class="w3-input"></p>'."\n";
    echo '<input type="hidden" name="pag" value="ques3a">'."\n";
    echo '<input type="submit" value="CONFERMA" class="w3-button w3-round w3-theme-d5">'."\n";
    echo "</form>\n";
    echo "</div>"."\n";    
    footergen();
    closer();       
}   

if($_GET["pag"]=='ques3a')
{
    $n=$_GET["n"];
    $min=floor($n/60);
    $o=floor($min/60);

    
    testata();
    headerh();

    //tasto home
    echo '<div class="w3-container">'."\n";
    echo '<p><a href="index.php?pag=" class="w3-button w3-theme-d5 w3-left">HOME</a></p>'."\n";
    echo "</div>"."\n";    
     
    echo "<ul>";
    echo "<li>sec: ".$n."</li>";
    echo "<li>min: ".$min."</li>";
    echo "<li>ore: ".$o."</li>";    
    echo "</ul>";
    footergen();
    closer();       
}

if($_GET["pag"]=='ques4')
{
    testata();
    headerh();

    //tasto home
    echo '<div class="w3-container">'."\n";
    echo '<p><a href="index.php?pag=" class="w3-button w3-theme-d5 w3-left">HOME</a>&nbsp;<a href="index.php?pag=ques3" class="w3-button w3-theme-d5 w3-right">&olarr;</a></p>'."\n";
    echo "</div>"."\n";    
        

    echo '<div class="w3-container">'."\n";
    echo "<h3>Inserisci Numero (dec)</h3>"."\n";    
    echo '<form method="GET" action="index.php">'."\n";
    echo '<p><input type="number" name="n" class="w3-input"></p>'."\n";
    echo '<input type="hidden" name="pag" value="ques4a">'."\n";
    echo '<input type="submit" value="CONFERMA" class="w3-button w3-round w3-theme-d5">'."\n";
    echo "</form>\n";
    echo "</div>"."\n";     
    
    footergen();
    closer();       
}  
if($_GET["pag"]=='ques4a')
{
    $n=$_GET["n"];
    $b=decbin($n);
        
    testata();
    headerh();

    //tasto home
    echo '<div class="w3-container">'."\n";
    echo '<p><a href="index.php?pag=" class="w3-button w3-theme-d5 w3-left">HOME</a></p>'."\n";
    echo "</div>"."\n";
    
    echo '<div class="w3-container">'."\n";     
    echo "<p>".$b."</p>"."\n";
    echo "</div>"."\n";     
    footergen();
    closer();       
}

if($_GET["pag"]=='ques5')
{
    testata();
    headerh();

    //tasto home
    echo '<div class="w3-container">'."\n";
    echo '<p><a href="index.php?pag=" class="w3-button w3-theme-d5 w3-left">HOME</a>&nbsp;<a href="index.php?pag=ques5" class="w3-button w3-theme-d5 w3-right">&olarr;</a></p>'."\n";
    echo "</div>"."\n";    
        

    echo '<div class="w3-container">'."\n";
    echo "<h3>Inserisci Dettagli Persona</h3>"."\n";    
    echo '<form method="GET" action="index.php">'."\n";
    echo '<p>Inserisci nome: <input type="text" name="nome" class="w3-input"></p>'."\n";
        echo '<p>Inserisci cognome: <input type="text" name="cognome" class="w3-input"></p>'."\n";
            echo '<p>Inserisci età: <input type="number" name="eta" class="w3-input"></p>'."\n";
    echo '<input type="hidden" name="pag" value="ques5a">'."\n";
    echo '<input type="submit" value="CONFERMA" class="w3-button w3-round w3-theme-d5">'."\n";
    echo "</form>\n";
    echo "</div>"."\n";
    footergen();
    closer();       
}
if($_GET["pag"]=='ques5a')
{
    testata();
    headerh();
    //tasto home
    echo '<div class="w3-container">'."\n";
    echo '<p><a href="index.php?pag=" class="w3-button w3-theme-d5 w3-left">HOME</a></p>'."\n";
    echo "</div>"."\n";
    echo "<br>";
    echo '<div class="w3-container">'."\n";
    echo '<table class="w3-table-all">'."\n";
    echo "<tr>"."\n";
    echo "<th>Nome</th><th>Cognome</th><th>Età</th>"."\n";
    echo "</tr>"."\n";
    echo "<tr>"."\n";
    echo "<td>".$_GET["nome"]."</td><td>".$_GET["cognome"]."</td><td>".$_GET["eta"]."</td>\n";
    echo "</tr>"."\n";
    echo "</table>"."\n";
    echo "</div>"."\n";    
    footergen();
    closer();       
}


//*******************************************************************************************************************
//*******************************************************************************************************************
//*******************************************************************************************************************

function testata(){
echo "<!DOCTYPE html>"."\n";
echo "<html>"."\n";
echo "<head>"."\n";
echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">'."\n";
echo '<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-brown.css" type="text/css">'."\n";
echo '<link rel="icon" href="/favicon.ico" />'."\n";
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">'."\n";
echo '<meta charset="UTF-8">'."\n";
echo '<meta lang="it">'."\n";
echo "<title></title>"."\n";
echo "</head>"."\n";
echo '<body class="w3-theme-l4">'."\n";
}

function closer(){
echo "</body>"."\n";
echo "</html>"."\n";
}
function headerh()
{

echo '<div class="w3-">'."\n";
echo '<h1 class="w3-teal w3-center" >COMPITO PER CASA</h1>'."\n";
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
          echo "<p>&copy Mattia Daday</p>"."\n";
          echo "</div>"."\n"; 
}


?>
