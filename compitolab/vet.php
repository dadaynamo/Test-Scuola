<?php
/*
 *1 riempire tabelle con valori
 *2 creare deltab2 
 *3 mostrare cosa cancelli
 *4 info alle varie pagine di inserimento
 *5 messaggi di errore negli inserimenti
 *
 *
 *
 *
 */
 //connessione DBMS
$conn=mysql_connect("127.0.0.1","root","") or die ("errore connessione dbms");
//selezione database
$db=mysql_select_db("my_dadaymattiasito") or die("errore collegamento al database"); 
//filtraggio per le pagine
$pag=filter_input(INPUT_GET,'pag',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  if($pag=='')
  {

      
          
          testatacar();
          echo '<div class="w3-container w3-center w3-display-middle ">'."\n";
          echo "<h1>Attendi Caricamento</h1>"."\n";
          echo '<p><i class="fa fa-spinner w3-spin" style="font-size:64px"></i></p>'."\n";
          echo "</div>\n";        
          header( "refresh:2;url=vet.php?pag=veth" );         
          footergen();       
          closer();              
}
  

  
  //pag principali
  elseif($pag=='veth')
  {
        testata();
       echo '<div class="w3-card-4 w3-display-middle w3-animate-opacity">'."\n";
              echo '<header class="w3-container w3-teal w3-center">'."\n";
                  echo "<h3>ESERCITAZIONE DI LABORATORIO di TPSIT </h3>"."\n";
                  echo "<h4>a.s. 2020/21</h4>"."\n";
              echo "</header>"."\n";
          
              echo '<div class="w3-container-left">'."\n";
                echo "<ul>"."\n";
                  echo "<li>Alunno: Daday Mattia Laszlo</li>"."\n";
                  echo "<li>Classe: 5IC</li>"."\n";
                  echo "<li>Docenti: A. D'Alessandro, F. Filippone</li>"."\n";
                  echo "<li>Data: 30/11/2020</li>"."\n";
                echo "</ul>"."\n";
              echo "</div>"."\n";
          
            echo '<footer class="w3-container w3-teal w3-center">'."\n";
              echo "<h6> Istituto di Istruzione Superiore “Luigi di Savoia” di Chieti   </h6>"."\n";
            echo "</footer>"."\n";
            
          echo "</div>"."\n";
echo '<p><a class="w3-button w3-teal" href="vet.php?pag=veth2">Vedi Consegna</a></p>'."\n";
      





//************************************************************************************************************************************************
//barra gestione pagine in basso con freccie sinistra e destra
//barra di impaginazione
//background-color: #20295b;
          echo "<br><br><br>"."\n";
           echo '<div style=" position: fixed; left: 0; bottom: 45px; width: 100%; background-color:#b7fff8; color: white; text-align: center;"">'."\n";
              echo '<ul class="pagination">';
                 echo '<li><a href="vet.php?pag=vetv">«</a></li>';
                 echo '<li><a  href="vet.php?pag=veth" class="active">HOME</a></li>';
                 echo '<li><a href="vet.php?pag=veta" >ANIMALI</a></li>';
                 echo '<li><a href="vet.php?pag=vetp">PROPRIETARI</a></li>';
                 echo '<li><a href="vet.php?pag=vetv">VISITE</a></li>';         
                echo '<li><a href="vet.php?pag=veta">&raquo;</a></li>';         
              echo "</ul>";
           echo "</div>"."\n";
           
          footergen();
          closer();      
  }
     
  elseif($pag=='veth2')
  {
      testata();
  
  echo '<div class="w3-container w3-display-topmiddle w3-animate-opacity w3-border">'."\n";
  
               echo '<header class="w3-container w3-teal w3-center">'."\n";
                  echo "<h3>Consegna</h3>"."\n";
              echo "</header>"."\n";
  
                echo '<div class="w3-container">'."\n";
   echo "<p>Oggetto: Realizzazione di una semplice applicazione web per gestire uno studio veterinario.</p>"."\n";
  echo "<p>Specifiche: 
Il Software deve permettere la gestione di un ambulatorio veterinario. 
In particolare si vuole mantenere i dati degli animali per es. nome, specie, razza, colore, età, taglia, peso, sesso, se sterilizzato, il numero del cip.
Dei loro proprietari per es. Nome, cognome, indirizzo, codfis o piva, telefono, emal e  le visite effettuate con la data, l’apparato oggetto della visita es. “Apparato Circolatorio”, “Apparato Gastroenterico”, “Apparato Genitale”, “Apparato MuscoloScheletrico”, “Apparato Nervoso”, “Apparato Oculare”, “Apparato Respiratorio”, “Apparato Tegumentario”, “Apparato Urinario” ect., tipo di visita es. controllo generale, vaccino, ect.
L’applicazione deve permettere l’inserimento, la modifica e l’eventuale cancellazione dei dati precedentmente esplicitati.
</p>"."\n";

echo "<p>I Fase - Analisi
In questa fase di deve produrre un documento con
</p>"."\n";
echo "<ul>";
echo "<li>l’analisi dei requisiti: funzionali (cosa deve fare il software, es. l’utente potrà inserire un nuovo proprietario , l’utente potrà modificare i dati di un  animale, etc.) e non funzionali ( proprietà del sistema, es. il sotware risiederà su di una piattaorma web online, quindi necessita di una connessione internet per l’utilizzo, il software necessita dell’interprete PHP versione 5.6, etc.) </li>";
echo "<li>progettazione DB.</li>";
echo "</ul>";
  
  echo "<p>II fase - Implementazione del software
Realizzazione dell’applicazione web utilizzando i linguaggi per il web studiati (HTML, CSS, PHP).
</p>";
              echo "</div>"."\n";  
            echo "</div>"."\n";     
            echo '<p><a class="w3-button w3-teal" href="vet.php?pag=veth">Vedi Info compito</a></p>'."\n";
  
  
  //***************************************************************************************************************
//barra gestione pagine in basso con freccie sinistra e destra
//barra di impaginazione
//background-color: #20295b;
          echo "<br><br><br>"."\n";
           echo '<div style=" position: fixed; left: 0; bottom: 45px; width: 100%; background-color:#b7fff8; color: white; text-align: center;"">'."\n";
              echo '<ul class="pagination">';
                 echo '<li><a href="vet.php?pag=vetv">«</a></li>';
                 echo '<li><a  href="vet.php?pag=veth" class="active">HOME</a></li>';
                 echo '<li><a href="vet.php?pag=veta" >ANIMALI</a></li>';
                 echo '<li><a href="vet.php?pag=vetp">PROPRIETARI</a></li>';
                 echo '<li><a href="vet.php?pag=vetv">VISITE</a></li>';         
                echo '<li><a href="vet.php?pag=veta">&raquo;</a></li>';         
              echo "</ul>";
           echo "</div>"."\n";
         footergen();
          closer();   
   }
   
   
   
   
   
   
   
   
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
   
  elseif($pag=='instab')
  {
      testata();
     headergen();
      //barra delle azioni   con pulsanti ricarica, + e a destra immagine per home
          echo '<div class="w3-container">'."\n";
            echo '<p><a href="vet.php?pag=veth" class="w3-button w3-theme-d5 w3-round w3-border-theme" >HOME</a>
            </p>'."\n";
          echo "</div>"."\n";
          $pagint=filter_input(INPUT_GET,'tab',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
          
 if($pagint=='a')
 {
   echo '<div class="w3-container w3-theme-l4">'."\n";
 echo '<form method="get" action="vet.php">'."\n";
 echo '<input type="hidden" name="pag" value="instab2">'."\n";
 echo '<input type="hidden" name="tab" value="a">'."\n";
 echo '<p>Cip Animale: <input type="text" name="numcip"  minlength="0" maxlength="11" pattern="[0-9]{11}" class="w3-input"></p>'."\n";
   echo '<p>Nome Animale: <input type="text" name="nome" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
   echo '<p>Specie Animale: <input type="text" name="specie" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
   echo '<p>Razza Animale: <input type="text" name="razza" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
   echo '<p>Colore Animale: <input type="text" name="colore" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
    echo '<p>Età Animale: <input type="number" name="eta" min="0" max="20" class="w3-input"></p>'."\n";
    echo '<p>Peso Animale: <input type="number" name="peso" min="0" max="20" step="0.01" class="w3-input"></p>'."\n";
        echo '<p>M(1) F(0): <input type="number" name="sesso" min="0" max="1" class="w3-input"></p>'."\n";
        echo '<p>Sterilizzato(1) Non Sterilizzato(0): <input type="number" name="sterilizzato" min="0" max="1" class="w3-input"></p>'."\n";
                echo '<p>Taglia: Piccola(0) Media(1) Grande(2): <input type="number" name="taglia_idtaglia" min="0" max="2" class="w3-input"></p>'."\n";
                   echo '<p>Cod. Fisc./p.IVA del proprietario: <input type="text" name="proprietario_fispiv" maxlength="16" minlength="0" class="w3-input"></p>'."\n";
        echo '<p><input type="submit" value="CONFERMA" class="w3-button w3-theme-d5 w3-round"></p>'."\n"; 
 echo "</form>"."\n";
 echo "</div>"."\n";
 

  
 }
 elseif($pagint=='b')
 {
   echo '<div class="w3-container w3-theme-l4">'."\n";
 echo '<form method="get" action="vet.php">'."\n";
 echo '<input type="hidden" name="pag" value="instab2">'."\n";
 echo '<input type="hidden" name="tab" value="b">'."\n";
 echo '<p>Data Visita: <input type="date" name="dvis" class="w3-input"></p>'."\n";
 echo '<p>Apparato Coinvolto: <input type="text" name="appvis" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
 echo '<p>Tipo di Visita: <input type="text" name="tipvis" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
 echo '<p>Cip Animale: <input type="text" name="animale_numcip"  minlength="0" pattern="[0-9]{11}" class="w3-input"></p>'."\n";
  echo '<p><input type="submit" value="CONFERMA" class="w3-button w3-theme-d5 w3-round"></p>'."\n";
 echo "</form>"."\n";
 echo "</div>"."\n";


 }
 elseif($pagint=='c')
 {
     echo '<div class="w3-container w3-theme-l4">'."\n";
  echo '<form method="get" action="vet.php">'."\n";
 echo '<input type="hidden" name="pag" value="instab2">'."\n";
 echo '<input type="hidden" name="tab" value="c">'."\n";
 echo '<p>Cod. Fisc./p.IVA del proprietario: <input type="text" name="fispiv" maxlength="16" minlength="0" class="w3-input"></p>'."\n";
   echo '<p>Nome Proprietario: <input type="text" name="nome" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
     echo '<p>Cognome Proprietario: <input type="text" name="cognome" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
          echo '<p>Via: <input type="text" name="via" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
      echo '<p>Numero civico: <input type="number" name="nc" min="0" class="w3-input"></p>'."\n";
         echo '<p>C.A.P.: <input type="text" name="cap" maxlength="5" pattern="[0-9]{5}" class="w3-input"></p>'."\n";
          echo '<p>Città: <input type="text" name="citta" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
                   echo '<p>Telefono: <input type="text" name="telefono" maxlength="10" minlength="0" pattern="[0-9]{10}" class="w3-input"></p>'."\n";
                         echo '<p>Email: <input type="email" name="email"  class="w3-input"></p>'."\n";
  echo '<p><input type="submit" value="CONFERMA" class="w3-button w3-theme-d5 w3-round"></p>'."\n";
 echo "</form>"."\n";
     echo "</div>"."\n";
  
  
 }
          
          footergen();       
          closer(); 
    
   }
   
  elseif($pag=='instab2')
  {
      $pagint=filter_input(INPUT_GET,'tab',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
       if($pagint=='a')
 {
  
  
  $q="INSERT INTO `animale` (`numcip`, `nome`, `specie`, `razza`, `colore`, `eta`, `peso`, `sesso`, `sterilizzato`, `taglia_idtaglia`, `proprietario_fispiv`) VALUES ('".$_GET["numcip"]."', '".$_GET["nome"]."', '".$_GET["specie"]."', '".$_GET["razza"]."', '".$_GET["colore"]."', '".$_GET["eta"]."', '".$_GET["peso"]."', '".$_GET["sesso"]."', '".$_GET["sterilizzato"]."', '".$_GET["taglia_idtaglia"]."', '".$_GET["proprietario_fispiv"]."');";
  
  $rq=mysql_query($q) or die("errore query inserimento");
header("location: vet.php?pag=veta");




 }
       if($pagint=='b')
 {
$q="INSERT INTO `visita` (`idvis`, `dvis`, `appvis`, `tipvis`, `animale_numcip`) VALUES (NULL, '".$_GET["dvis"]."', '".$_GET["appvis"]."', '".$_GET["tipvis"]."', '".$_GET["animale_numcip"]."');";
$rq=mysql_query($q) or die("errore query inserimento");
header("location: vet.php?pag=vetv");
  
 }
          if($pagint=='c')
 {
  $q="INSERT INTO `proprietario` (`fispiv`, `nome`, `cognome`, `via`, `nc`, `cap`, `citta`, `telefono`, `email`) VALUES ('".$_GET["fispiv"]."', '".$_GET["nome"]."', '".$_GET["cognome"]."', '".$_GET["via"]."', '".$_GET["nc"]."', '".$_GET["cap"]."', '".$_GET["citta"]."', '".$_GET["telefono"]."', '".$_GET["email"]."')";
  $rq=mysql_query($q) or die("errore query inserimento");
header("location: vet.php?pag=vetp");
 }
         
     }
     
  
   
  elseif($pag=='modtab')
  {
              testata();
     headergen();
      //barra delle azioni   con pulsanti ricarica, + e a destra immagine per home
          echo '<div class="w3-container">'."\n";
            echo '<p><a href="vet.php?pag=veth" class="w3-button w3-theme-d5 w3-round w3-border-theme" >HOME</a>
            </p>'."\n";
          echo "</div>"."\n";
           $pagint=filter_input(INPUT_GET,'tab',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
           
          if($pagint=='a')
 {
  $q="select * from animale where numcip='".$_GET["id"] ."'";
  $rq=mysql_query($q) or die ("errore selezione");
  $riga=mysql_fetch_assoc($rq);
   echo '<div class="w3-container w3-theme-l4">'."\n";
 echo '<form method="get" action="vet.php">'."\n";
 echo '<input type="hidden" name="pag" value="modtab2">'."\n";
 echo '<input type="hidden" name="tab" value="a">'."\n";
  echo '<input type="hidden" name="id" value="'.$_GET["id"].'">'."\n";
   echo '<p>Nome Animale: <input type="text" name="nome" maxlength="45" minlength="0" value="'.$riga["nome"].'" class="w3-input"></p>'."\n";
   echo '<p>Specie Animale: <input type="text" name="specie" maxlength="45" minlength="0" value="'.$riga["specie"].'" class="w3-input"></p>'."\n";
   echo '<p>Razza Animale: <input type="text" name="razza" maxlength="45" minlength="0" value="'.$riga["razza"].'" class="w3-input"></p>'."\n";
   echo '<p>Colore Animale: <input type="text" name="colore" maxlength="45" minlength="0" value="'.$riga["colore"].'" class="w3-input"></p>'."\n";
    echo '<p>Età Animale: <input type="number" name="eta" min="0" max="20" value="'.$riga["eta"].'" class="w3-input"></p>'."\n";
    echo '<p>Peso Animale: <input type="number" name="peso" min="0" max="20" value="'.$riga["peso"].'" step="0.01" class="w3-input"></p>'."\n";
        echo '<p>M(1) F(0): <input type="number" name="sesso" min="0" max="1" value="'.$riga["sesso"].'" class="w3-input"></p>'."\n";
        echo '<p>Sterilizzato(1) Non Sterilizzato(0): <input type="number" name="sterilizzato" value="'.$riga["sterilizzato"].'" min="0" max="1" class="w3-input"></p>'."\n";
                echo '<p>Taglia: Piccola(0) Media(1) Grande(2): <input type="number" value="'.$riga["taglia_idtaglia"].'" name="taglia_idtaglia" min="0" max="2" class="w3-input"></p>'."\n";
                   echo '<p>Cod. Fisc./p.IVA del proprietario: <input type="text" value="'.$riga["proprietario_fispiv"].'" name="proprietario_fispiv" maxlength="16" minlength="0" class="w3-input"></p>'."\n";
        echo '<p><input type="submit" value="CONFERMA" class="w3-button w3-theme-d5"></p>'."\n"; 
 echo "</form>"."\n";
 echo "</div>"."\n";
 

  
 }
   elseif($pagint=='b')
 {
     $q="select * from visita where idvis='".$_GET["id"] ."'";
  $rq=mysql_query($q) or die ("errore selezione");
  $riga=mysql_fetch_assoc($rq);

   echo '<div class="w3-container w3-theme-l4">'."\n";
 echo '<form method="get" action="vet.php">'."\n";
 echo '<input type="hidden" name="pag" value="modtab2">'."\n";
 echo '<input type="hidden" name="tab" value="b">'."\n";
   echo '<input type="hidden" name="id" value="'.$_GET["id"].'">'."\n";
 echo '<p>Data Visita: <input type="date" name="dvis" value="'.$riga["dvis"].'"  class="w3-input"></p>'."\n";
 echo '<p>Apparato Coinvolto: <input type="text" name="appvis" value="'.$riga["appvis"].'"  maxlength="45" minlength="0" class="w3-input"></p>'."\n";
 echo '<p>Tipo di Visita: <input type="text" name="tipvis" value="'.$riga["tipvis"].'"  maxlength="45" minlength="0" class="w3-input"></p>'."\n";
 echo '<p>Cip Animale: <input type="text" name="animale_numcip"  value="'.$riga["animale_numcip"].'"  minlength="0" pattern="[0-9]{11}" class="w3-input"></p>'."\n";
  echo '<p><input type="submit" value="CONFERMA" class="w3-button w3-theme-d5"></p>'."\n";
 echo "</form>"."\n";
 echo "</div>"."\n";

 }        
          
     elseif($pagint=='c')
 {        
       $q="select * from proprietario where fispiv='".$_GET["id"] ."'";
  $rq=mysql_query($q) or die ("errore selezione");
  $riga=mysql_fetch_assoc($rq);       
         
        echo '<div class="w3-container w3-theme-l4">'."\n";
  echo '<form method="get" action="vet.php">'."\n";
 echo '<input type="hidden" name="pag" value="modtab2">'."\n";
 echo '<input type="hidden" name="tab" value="c">'."\n";
   echo '<input type="hidden" name="id" value="'.$_GET["id"].'">'."\n";
   echo '<p>Nome Proprietario: <input type="text" name="nome" value="'.$riga["nome"].'"   maxlength="45" minlength="0" class="w3-input"></p>'."\n";
     echo '<p>Cognome Proprietario: <input type="text" value="'.$riga["cognome"].'"   name="cognome" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
          echo '<p>Via: <input type="text" name="via" value="'.$riga["via"].'"   maxlength="45" minlength="0" class="w3-input"></p>'."\n";
      echo '<p>Numero civico: <input type="number" value="'.$riga["nc"].'"   name="nc" min="0" class="w3-input"></p>'."\n";
         echo '<p>C.A.P.: <input type="text" value="'.$riga["cap"].'"   name="cap" maxlength="5" pattern="[0-9]{5}" class="w3-input"></p>'."\n";
          echo '<p>Città: <input type="text"  value="'.$riga["citta"].'"  name="citta" maxlength="45" minlength="0" class="w3-input"></p>'."\n";
                   echo '<p>Telefono: <input type="text"  value="'.$riga["telefono"].'"  name="telefono" maxlength="10" minlength="0" pattern="[0-9]{10}" class="w3-input"></p>'."\n";
                         echo '<p>Email: <input  value="'.$riga["email"].'"  type="email" name="email"  class="w3-input"></p>'."\n";
  echo '<p><input type="submit" value="CONFERMA" class="w3-button w3-theme-d5"></p>'."\n";
 echo "</form>"."\n";
     echo "</div>"."\n";
  
        
         
          
 }  
          footergen();       
          closer(); 
  }
  
  elseif($pag=='modtab2')
  {
      $pagint=filter_input(INPUT_GET,'tab',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
       if($pagint=='a')
 {
  
  
  $q="UPDATE `animale` SET `nome` = '".$_GET["nome"]."', `specie` = '".$_GET["specie"]."', `razza` = '".$_GET["razza"]."', `colore` = '".$_GET["colore"]."', `eta` = '".$_GET["eta"]."', `peso` = '".$_GET["peso"]."', `sesso` = '".$_GET["sesso"]."', `sterilizzato` = '".$_GET["sterilizzato"]."', `proprietario_fispiv` = '".$_GET["proprietario_fispiv"]."' WHERE `animale`.`numcip` = '".$_GET["id"]."'";
  
  $rq=mysql_query($q) or die("errore query inserimento");
header("location: vet.php?pag=veta");




 }
       if($pagint=='b')
 {
  $q="UPDATE `visita` SET `dvis` = '".$_GET["dvis"]."', `appvis` = '".$_GET["appvis"]."', `tipvis` = '".$_GET["tipvis"]."', `animale_numcip` = '".$_GET["animale_numcip"]."' WHERE `visita`.`idvis` = '".$_GET["id"]."'";
$rq=mysql_query($q) or die("errore query inserimento");
header("location: vet.php?pag=vetv");
  
 }
          if($pagint=='c')
 {

  $q="UPDATE `proprietario` SET `nome` = '".$_GET["nome"]."', `cognome` = '".$_GET["cognome"]."', `via` = '".$_GET["via"]."', `nc` = '".$_GET["nc"]."', `cap` = '".$_GET["cap"]."', `citta` = '".$_GET["citta"]."', `telefono` = '".$_GET["telefono"]."', `email` = '".$_GET["email"]."' WHERE `proprietario`.`fispiv` = '".$_GET["id"]."'";
  $rq=mysql_query($q) or die("errore query inserimento");
header("location: vet.php?pag=vetp");
 }
         
     }
  
  
  
  
  
  
  
  
  
  elseif($pag=='deltab')
  {
              testata();
     headergen();
         //barra delle azioni   con pulsanti ricarica, + e a destra immagine per home
          echo '<div class="w3-container">'."\n";
            echo '<p><a href="vet.php?pag=veth" class="w3-button w3-theme-d5 w3-round w3-border-theme" >HOME</a></p>'."\n";
          echo "</div>"."\n";
 
            $pagint=filter_input(INPUT_GET,'tab',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
           
 if($pagint=='a')
 {  $q='DELETE FROM animale WHERE numcip="'.$_GET["id"].'"';
$rq=mysql_query($q) or die("errore query inserimento");
header("location: vet.php?pag=veta");
  
  
 }
  if($pagint=='b')
 {
    $q='DELETE FROM visita WHERE idvis="'.$_GET["id"].'"';
$rq=mysql_query($q) or die("errore query inserimento");
header("location: vet.php?pag=vetv");
  
 }
         if($pagint=='c')
 {
    $q='DELETE FROM proprietario WHERE fispiv="'.$_GET["id"].'"';
  $rq=mysql_query($q) or die("errore query inserimento");
header("location: vet.php?pag=vetp");
 }
  
 
 
 
          footergen();       
          closer(); 
  }   
 
 
 
 
 
 
 
 
 
 
 
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
  elseif($pag=='veta')
  {
    //tab A
    $q="select * from animale";
    $rq=mysql_query($q) or die ("errore selezione tabella animali");
    
    
          testata();
     headergen();
          
//barra delle azioni   con pulsanti ricarica, + e a destra immagine per home
          echo '<div class="w3-container ">'."\n";
            echo '<p><a href="vet.php?pag=instab&tab=a" class="w3-button w3-theme-d5 w3-round w3-border-theme" >+</a>
            <a href="vet.php?pag=veta" class="w3-button w3-theme-d5 w3-round w3-border-theme" >&olarr;</a></p>'."\n";
          echo "</div>"."\n";
  //tabella creazione
            
                     
echo '<div class="w3-container w3-center w3-animate-zoom w3-responsive">'."\n";
    echo '<table class="w3-table-all ">'."\n";
    echo '<tr style="background-color: #b7fff8;"><th>N° cip</th> <th>Nome</th> <th>Specie</th> <th>Razza</th> <th>Colore</th> <th>Età</th> <th>Peso</th>
    <th>Sesso</th> <th>Sterilizzato</th> <th>Taglia</th> <th>Codice proprietario</th><th>AZIONI</th></tr>'."\n";
    while($riga=mysql_fetch_assoc($rq))
    {
      echo "<tr>"."\n";
      echo "<td>".$riga["numcip"]."</td>"."\n";
      echo "<td>".$riga["nome"]."</td>"."\n";
      echo "<td>".$riga["specie"]."</td>"."\n";
      echo "<td>".$riga["razza"]."</td>"."\n";
      echo "<td>".$riga["colore"]."</td>"."\n";
      echo "<td>".$riga["eta"]."</td>"."\n";
      echo "<td>".$riga["peso"]." Kg</td>"."\n";
      echo "<td>".$riga["sesso"]."</td>"."\n";
      echo "<td>".$riga["sterilizzato"]."</td>"."\n";
      echo "<td>".$riga["taglia_idtaglia"]."</td>"."\n";
      echo "<td>".$riga["proprietario_fispiv"]."</td>"."\n";
      echo '<td><a href="vet.php?pag=modtab&id='.$riga["numcip"].'&tab=a" class="w3-button w3-theme-d2 w3-round">MOD</a>&nbsp;<a href="vet.php?pag=deltab&id='.$riga["numcip"].'&tab=a" class="w3-button w3-red w3-round">ELI</a></td>';
      echo "</tr>"."\n";
    }
    
    
    echo "</table>"."\n";
    echo "</div>"."\n";
     
            echo "<br>"."\n";
     
     echo '<h2><a href="#arrivo" class="w3-button w3-teal w3-right w3-round">&Uarr;</a></h2>'."\n";
//************************************************************************************************************************************
//barra gestione pagine in basso con freccie sinistra e destra
//barra di impaginazione
//background-color: #20295b;


 
           echo '<div style=" position: fixed; left: 0; bottom: 45px; width: 100%; background-color:#b7fff8; color: white; text-align: center;"">'."\n";
              echo '<ul class="pagination">';
                 echo '<li><a href="vet.php?pag=veth">«</a></li>';
                 echo '<li><a  href="vet.php?pag=veth" >HOME</a></li>';
                 echo '<li><a href="vet.php?pag=veta" class="active">ANIMALI</a></li>';
                 echo '<li><a href="vet.php?pag=vetp">PROPRIETARI</a></li>';
                 echo '<li><a href="vet.php?pag=vetv">VISITE</a></li>';         
                echo '<li><a href="vet.php?pag=vetp">&raquo;</a></li>';         
              echo "</ul>";
           echo "</div>"."\n";

          footergen();       
          closer();      
  }

  elseif($pag=='vetv')
  {
       //tab B
        $q="select * from visita";
    $rq=mysql_query($q) or die ("errore selezione tabella animali");
    
          testata();
     headergen();        
   //barra delle azioni   con pulsanti ricarica, + e a destra immagine per home
          echo '<div class="w3-container">'."\n";
            echo '<p><a href="vet.php?pag=instab&tab=b" class="w3-button w3-theme-d5 w3-round w3-border-theme" >+</a>
            <a href="vet.php?pag=vetv" class="w3-button w3-theme-d5 w3-round w3-border-theme" >&olarr;</a></p>'."\n";
          echo "</div>"."\n";

echo '<div class="w3-container  w3-animate-zoom w3-responsive">'."\n";
           //tabella creazione     

    echo '<table class="w3-table-all  w3-center ">'."\n";
    echo '<tr style="background-color: #b7fff8;" ><th>ID visita</th> <th>Data Visita</th> <th>Apparato interessato</th> <th>Tipo visita</th> <th>N° cip</th><th>AZIONI</th></tr>'."\n";
    while($riga=mysql_fetch_assoc($rq))
    {
      echo "<tr>"."\n";
      echo "<td>".$riga["idvis"]."</td>"."\n";
      echo "<td>".$riga["dvis"]."</td>"."\n";
      echo "<td>".$riga["appvis"]."</td>"."\n";
      echo "<td>".$riga["tipvis"]."</td>"."\n";
      echo "<td>".$riga["animale_numcip"]."</td>"."\n";
            echo '<td><a href="vet.php?pag=modtab&id='.$riga["idvis"].'&tab=b" class="w3-button w3-theme-d2 w3-round">MOD</a>&nbsp;<a href="vet.php?pag=deltab&id='.$riga["idvis"].'&tab=b" class="w3-button w3-red w3-round">ELI</a></td>';
      echo "</tr>"."\n";
    }
    echo "</table>";
       echo "</div>"."\n";
            echo "<br>"."\n";
     
     echo '<h2><a href="#arrivo" class="w3-button w3-teal w3-right w3-round">&Uarr;</a></h2>'."\n";

//************************************************************************************************************************************************
//barra gestione pagine in basso con freccie sinistra e destra
//barra di impaginazione
//background-color: #20295b;
 
           echo '<div style=" position: fixed; left: 0; bottom: 45px; width: 100%; background-color:#b7fff8; color: white; text-align: center;"">'."\n";
              echo '<ul class="pagination">';
                 echo '<li><a href="vet.php?pag=vetp">«</a></li>';
                 echo '<li><a  href="vet.php?pag=veth" >HOME</a></li>';
                 echo '<li><a href="vet.php?pag=veta" >ANIMALI</a></li>';
                 echo '<li><a href="vet.php?pag=vetp">PROPRIETARI</a></li>';
                 echo '<li><a href="vet.php?pag=vetv" class="active">VISITE</a></li>';         
                echo '<li><a href="vet.php?pag=veth">&raquo;</a></li>';         
              echo "</ul>";
           echo "</div>"."\n";
 
          footergen();       
          closer();         
  }

  elseif($pag=='vetp')
  {
   
       //tab C
        $q="select * from proprietario";
    $rq=mysql_query($q) or die ("errore selezione tabella animali");
             testata();
       headergen();
      

    //barra delle azioni   con pulsanti ricarica, + e a destra immagine per home
          echo '<div class="w3-container">'."\n";
            echo '<p><a href="vet.php?pag=instab&tab=c" class="w3-button w3-theme-d5 w3-round w3-border-theme" >+</a>
            <a href="vet.php?pag=vetp" class="w3-button w3-theme-d5 w3-round w3-border-theme" >&olarr;</a></p>'."\n";
          echo "</div>"."\n";

     //tabella creazione
    
    echo '<div class="w3-container w3-center w3-responsive w3-animate-zoom">'."\n";
    echo '<table class="w3-table-all">'."\n";
    echo '<tr style="background-color: #b7fff8;" ><th>cod.FISCALE/p.IVA</th> <th>Nome</th> <th>Cognome</th> <th>Via</th> <th>N° civico</th> <th>CAP</th> <th>città</th> <th>Telefono</th> <th>Email</th><th>AZIONI</th></tr>'."\n";
    while($riga=mysql_fetch_assoc($rq))
    {
      echo "<tr>"."\n";
      echo "<td>".$riga["fispiv"]."</td>"."\n";
      echo "<td>".$riga["nome"]."</td>"."\n";
      echo "<td>".$riga["cognome"]."</td>"."\n";
      echo "<td>".$riga["via"]."</td>"."\n";
      echo "<td>".$riga["nc"]."</td>"."\n";
      echo "<td>".$riga["cap"]."</td>"."\n";
      echo "<td>".$riga["citta"]."</td>"."\n";
      echo "<td>".$riga["telefono"]."</td>"."\n";
      echo "<td>".$riga["email"]."</td>"."\n";
      echo '<td><a href="vet.php?pag=modtab&id='.$riga["fispiv"].'&tab=c" class="w3-button w3-theme-d2 w3-round">MOD</a>&nbsp;<a href="vet.php?pag=deltab&id='.$riga["fispiv"].'&tab=c" class="w3-button w3-red w3-round">ELI</a></td>';
      echo "</tr>"."\n";
    }
    
    
    echo "</table>"."\n";
    echo "</div>"."\n";
     echo "<br>"."\n";
     
     echo '<h2><a href="#arrivo" class="w3-button w3-teal w3-right w3-round">&Uarr;</a></h2>'."\n";

//************************************************************************************************************************************************
//barra gestione pagine in basso con freccie sinistra e destra
//barra di impaginazione
//background-color: #20295b;
          echo "<br><br><br>"."\n";
           echo '<div style=" position: fixed; left: 0; bottom: 45px; width: 100%; background-color:#b7fff8; color: white; text-align: center;"">'."\n";
              echo '<ul class="pagination">';
                 echo '<li><a href="vet.php?pag=veta">«</a></li>';
                 echo '<li><a  href="vet.php?pag=veth" >HOME</a></li>';
                 echo '<li><a href="vet.php?pag=veta" >ANIMALI</a></li>';
                 echo '<li><a href="vet.php?pag=vetp" class="active">PROPRIETARI</a></li>';
                 echo '<li><a href="vet.php?pag=vetv" >VISITE</a></li>';         
                echo '<li><a href="vet.php?pag=vetv">&raquo;</a></li>';         
              echo "</ul>";
           echo "</div>"."\n";
          footergen();       
          closer();            
   
          
  }

  
//******************************************************************************************************************************************************
//******************************************************************************************************************************************************
//******************************************************************************************************************************************************
//******************************************************************************************************************************************************
function testata()
{
          
          echo "<!DOCTYPE html>"."\n";
          echo "<html>"."\n";
                    echo "<head>"."\n";
                              echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">'."\n";
                              echo '<link rel="stylesheet" type="text/css" href="bp.css">'."\n";
                              echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">'."\n";
                              echo '<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-brown.css" type="text/css">'."\n";
                              echo '<link rel="icon" href="/favicon.ico" />'."\n";
                              echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">'."\n";
                              echo '<meta charset="UTF-8">'."\n";
                              echo '<meta lang="it">'."\n";
                              echo "<title></title>"."\n";
                    echo "</head>"."\n";
                    echo '<body>'."\n";
}
function testatacar()
{
          echo "<!DOCTYPE html>"."\n";
          echo "<html>"."\n";
                    echo "<head>"."\n";
                              echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">'."\n";
                              echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">'."\n";
                              echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">'."\n";
                              echo '<meta charset="UTF-8">'."\n";
                              echo '<meta lang="it">'."\n";
                              echo "<title></title>"."\n";
                    echo "</head>"."\n";
                    echo '<body class="w3-black">'."\n";
}

function closer()
{
                    echo "</body>"."\n";
          echo "</html>"."\n";
}
function headerh()
{

          echo '<div class="w3-container w3-center">'."\n";
                    echo '<h1 class="w3-teal" >GESTIONE AMBULATORIO</h1>'."\n";
          echo "</div>"."\n";

}

function footergen()
{
//footer--------------------------------------------------------------------------------
echo "<br><br><br><br><br><br><br><br>";
          echo '<div style=" position: fixed; left: 0; bottom: 0; width: 100%; background-color: teal; color: white; text-align: center;">'."\n";
                    echo "<p>&copy Mattia Daday</p>"."\n";
          echo "</div>"."\n"; 
}

function headergen()
{
  echo '<a name="arrivo">f</a>'."\n";


//footer--------------------------------------------------------------------------------
        
          echo '<div style=" position: fixed; top: 0; left: 0; width: 100%; background-color: teal; color: white; text-align: center;">'."\n";
                    echo '<h2><a name="arrivo">Gestione </a>Ambulatorio</h2>'."\n";
          echo "</div>"."\n"; 

  echo "<br><br><br>"."\n";
  
  
}

//chiusura connessione con DBMS
$close=mysql_close($conn) or die("errore chiusura connessione");
?>