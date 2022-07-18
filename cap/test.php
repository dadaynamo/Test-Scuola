<?php
//1. Connessione con il server DBMS
//2. Selezione del DB sul quale lavorare
//3. Preparazione della query ed invio al DBMS
//4. Recupero ed elaborazione dei risultati (recorset)
//5. Chiusura della connessione al DBMS

//sintassi: mysql_connect(...nomehost...,username,password)
$conn = mysql_connect("127.0.0.1","root","") or die("errore di connessione al DBMS");
$db = mysql_select_db("my_dadaymattiasito") or die("errore di selezione DB");

function testata() {
	echo "<!DOCTYPE HTML>\n";
	echo '<html lang="it">'."\n";
	echo "<head>\n";
	echo '<title>Test connessione</title>'."\n";
	echo '<meta charset="UTF-8">'."\n";
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">'."\n";
	echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">'."\n";
	echo "</head>\n";
	echo "<body>\n";
	echo '<div class="w3-container">'."\n";
}

function footer() {
	echo "</div>\n";
	echo "</body>\n";
	echo "</html>\n";
}

$pag = filter_input(INPUT_GET,'pag',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($pag=='') {
	//home page con elenco dei corsi
	testata();
	$q = "select * from corsi";
	$rq = mysql_query($q) or die("errore con la query:".$q);
	$num = mysql_num_rows($rq);
	echo '<h1><a class="w3-button w3-green w3-round" href="test.php?pag=newcorso">+</a> Elenco dei corsi ('.$num.')</h1>'."\n";
	echo '<table class="w3-table-all">'."\n";
	echo '<tr><th>IdCorso</th><th>Descrizione</th><th>Operazioni</th></tr>'."\n";
	while ($riga = mysql_fetch_assoc($rq)) {
		echo '<tr>';
	 	echo '<td>'.$riga["idcorso"]."</td>";
  		echo '<td>'.$riga["descorso"]."</td>";
        echo '<td>';
        echo '<a href="test.php?pag=modcorso&idcorso='.$riga["idcorso"].'" class="w3-button w3-green w3-small w3-round">MODIFICA</a> ';
        echo '<a href="test.php?pag=delcorso&idcorso='.$riga["idcorso"].'" class="w3-button w3-red w3-small w3-round">ELIMINA</a> ';
        echo "</td>\n";
	  	echo "</tr>\n";
	}
	echo "</table>\n";
    footer();
}

if ($pag=="newcorso") {
	//inserisci un nuovo corso nella tabella
    testata();
    echo '<h1>Inserisci i dati di un nuovo corso</h1>'."\n";
    echo '<form method="get" action="test.php">'."\n";
    echo '<p><label for="descorso">Denominazione del corso</label>';
    echo '<input class="w3-input" type="text" id="descorso" name="descorso" maxlength="50" required></p>'."\n";
    echo '<input type="hidden" name="pag" value="newcorso2">'."\n";
    echo '<p><input type="submit" value="MEMORIZZA CORSO" class="w3-button w3-green"></p>'."\n";
    echo "</form>\n";
    footer();
}
if ($pag=="newcorso2") {
	//salvataggio dei dati del modulo all'interno della tabella
    //insert into corsi (descorso) values ('Programmazione')
    $q = "insert into corsi (descorso) values ('".$_GET["descorso"]."')";
    $rq = mysql_query($q) or die("errore con la query di inserimento");
    header("Location:test.php");
}

if ($pag=="modcorso") {
	//modifica dei dati di un corso
    $idc = filter_input(INPUT_GET,'idcorso',FILTER_VALIDATE_INT);
    $q = "select * from corsi where idcorso=".$idc;
    $rq = mysql_query($q) or die("errore con la query");
    $corso = mysql_fetch_assoc($rq);
    testata();
    echo '<h1>Modifica dati del corso</h1>'."\n";
    echo '<form method="get" action="test.php">'."\n";
    echo '<p><label for="descorso">Denominazione del corso</label>';
    echo '<input class="w3-input" value="'.$corso["descorso"].'" type="text" id="descorso" name="descorso" maxlength="50" required></p>'."\n";
    echo '<input type="hidden" name="pag" value="modcorso2">'."\n";
  	echo '<input type="hidden" name="idcorso" value="'.$idc.'">'."\n";
    echo '<p><input type="submit" value="MEMORIZZA MODIFICHE" class="w3-button w3-green"></p>'."\n";
    echo "</form>\n";
    footer();
}
if ($pag=="modcorso2") {
	//$idc = $_GET["idcorso"];
	$idc = filter_input(INPUT_GET,'idcorso',FILTER_VALIDATE_INT);
	//salvataggio modifiche al record
    $q = "update corsi set descorso='".mysql_real_escape_string($_GET["descorso"])."' ";
    $q.= "where idcorso=".$idc;
    $rq = mysql_query($q) or die("errore con il salvataggio del corso: ".$q);
    header("Location:test.php");
}

//cancellazione del corso
if ($pag=="delcorso") {
	$idc = filter_input(INPUT_GET,'idcorso',FILTER_VALIDATE_INT);
	testata();
    echo "<h1>Stai per cancellare il seguente corso:</h1>\n";
    $q = "select * from corsi where idcorso=".$idc;
    $rq = mysql_query($q) or die("errore con individuazione corso");
    $num = mysql_num_rows($rq);
    if ($num==1) {
    	$corso = mysql_fetch_assoc($rq);
    	echo '<div class="w3-containter w3-yellow w3-padding w3-round">';
    	echo $corso["descorso"];
    	echo "</div>\n";
    	echo '<p>Sei sicuro?</p>'."\n";
    	echo '<p>';
		echo '<a href="test.php?pag=delcorso2&idcorso='.$idc.'" class="w3-button w3-red">SI</a> ';
    	echo '<a href="test.php" class="w3-button w3-dark-grey">NO</a> ';
    	echo "</p>\n";
    } else {
    	echo '<h1>Il corso non è più presente.</h1>'."\n";
        echo "<h2>Impossibile procedere con la cancellazione richiesta.</h2>\n";
        echo '<p><a href="test.php" class="w3-button w3-green">TORNA ALLA HOME</a></p>'."\n";
    }
    footer();
}
if ($pag=="delcorso2") {
	$idc = filter_input(INPUT_GET,'idcorso',FILTER_VALIDATE_INT);
    $q = "select * from corsi where idcorso=".$idc;
    $rq = mysql_query($q) or die("errore con individuazione corso");
    $num = mysql_num_rows($rq);
    if ($num==1) {
	    $q = "delete from corsi where idcorso=".$idc;
    	$rq = mysql_query($q) or die("errore con la cancellazione del corso");
	    header("Location:test.php");
    } else {
    	testata();
        echo '<p>Record non presente!</p>'."\n";
        footer();
    }
}

//chiudiamo la connessione con il DBMS
mysql_close($conn);