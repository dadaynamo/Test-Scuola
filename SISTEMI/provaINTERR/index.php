<?php
function testata() {
    echo '<!DOCTYPE HTML>'."\n";
    echo '<html lang="it">'."\n";
    echo "<head>\n";
    echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">'."\n";
    echo '<meta charset="UTF-8">'."\n";
    echo "<title>Pagina di prova php</title>\n";
    echo "</head>\n";
    echo "<body>\n";    
}

function footer() {
    echo "</body>\n";
    echo "</html>\n";
}

$pag = $_GET["pag"];

if ($pag=='') {
    testata();
    echo "<h1>Esempio di modulo</h1>\n";
    echo '<form method="get" action="index.php">'."\n";
    echo '<p>Inserisci un valore:<br><input type="number" name="valore"></p>'."\n";
    echo '<input type="hidden" name="pag" value="risultato">'."\n";
    echo '<p><input type="submit" value="Procedi"></p>'."\n";
    echo "</form>\n";
    echo "<hr>\n";
    echo '<p><a href="index.php?pag=credits">Clicca qui per vedere i credits</a></p>'."\n";
    
    footer();
}

if ($pag=="risultato") {
    testata();
    if($_GET["valore"]==12)
    {
    //pagina segreta
     echo '<h1>PAGINA SEGRETA</h1>'."\n";
     echo '<p><a href="https://www.youtube.com/?hl=it&gl=IT">NON CLICCARE</a></p>'."\n";
    
    echo '<form method="get" action="index.php">'."\n";
    echo '<p>inserisci numero: <input type="number" name="eta" required></p>'."\n";
    echo '<input type="text" name="testo" minlength="5" maxlength="10">'."\n";
    echo '<p>inserisci colore<input type="color" name="colore"></p>'."\n";
    echo '<input type="hidden" name="pag" value="segreto2">'."\n";
    echo '<input type="submit" value="conferma">'."\n";
    echo '</form>'."\n";
   	
    }
    else
    {
    echo '<h1>Risultato</h1>'."\n";
    echo '<p>Caro utente hai scritto questo valore dentro la casella di testo<br>';
    echo $_GET["valore"];
    echo "<ul>";
    for ($i = 1; $i<=$_GET["valore"];$i++) {
        echo "<li>".$i."</li>\n";
    }
    echo "</ul>\n";
    echo "</p>\n";
    echo '<p><a href="index.php">Torna indietro</a></p>'."\n";
    
    
    }
    footer();
}
else if ($pag=='segreto2'){
  testata();
echo '<h1 class="w3-h1 w3-blue">queto è il mega segreto</h1>'."\n";
 footer();

}
if ($pag=="credits") {
    testata();
    echo "<h1>Credits</h1>";
    echo "<p>...</p>";
    footer();
}
?>
