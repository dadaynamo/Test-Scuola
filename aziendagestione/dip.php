<?php
/*
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
*/

$conn=mysql_connect("127.0.0.1","root","") or die ("errore connessione dbms");
$db=mysql_select_db("my_dadaymattiasito") or die("errore collegamento al database");

$pag=filter_input(INPUT_GET,'pag',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

//PAGINE --------------------------------------------------------------------------------------------------------------  




//home ================================================================================================================

if($pag=='')
{
    testata();
    headerhome();

    echo "<br><hr>"."\n";
    

   echo '<div class="w3-container">'."\n";
        echo '<div class="w3-row">'."\n";
            echo '<div class="w3-col  l2">&nbsp;</div>'."\n";
            echo '<div class="w3-col  l2">'."\n";
                echo '<a class="w3-button w3-theme w3-round" href="dip.php?pag=diphom">Dipendenti</a>'."\n";
            echo "</div>"."\n";
            echo '<div class="w3-col  l4">&nbsp;</div>'."\n";
            echo '<div class="w3-col l2">'."\n";
                echo '<a class="w3-button w3-theme w3-round" href="dip.php?pag=verhom">Versamenti</a>'."\n";
            echo "</div>"."\n";
            echo '<div class="w3-col  l2">&nbsp;</div>'."\n";
        echo "</div>"."\n";
    echo "</div>"."\n";
  //   echo "<br>"."\n";  
    echo '<div class="w3-container">'."\n";
                echo '<div class="w3-col  l5">&nbsp;</div>'."\n";
            echo '<div class="w3-col  l2">'."\n";
            echo '<a class="w3-button w3-theme w3-round" href="dip.php?pag=azihom">Aziende</a>'."\n";
        echo "</div>"."\n";
        echo '<div class="w3-col  l5">&nbsp;</div>'."\n";
    echo "</div>"."\n";
    
        echo "<br><hr><br><br><br>"."\n";
        echo '<div class="w3-container w3-round">'."\n";
                echo '<div class="w3-col  l4 w3-theme-l3 w3-container">';
                echo "<h3>Come Iniziare:</h3>";
                echo '<ul type="square">'."\n";
                echo "<li >Premere uno dei pulsanti sopra per accendere al database desiderato</li>";
                echo "<li >Una volta entrati in un database procedere con la gestioni</li>";
                echo "<li></li>";
                echo "</ul>"."\n";
                
                
               echo  '</div>'."\n";

echo '<div class="w3-col  l9">&nbsp;</div>'."\n";
echo "</div>"."\n";

    
    
    footergen();
    closer();
    
}

//DIPENDENTE ***************************************************************************************************************

if($pag=='diphom')
{
      
    testata();
    headerdip();
    
//barra delle azioni
    echo '<div class="w3-container w3-half">'."\n";
    echo '<p><a href="dip.php?pag=insdip" class="w3-button w3-theme-d5 w3-round w3-border-theme" >+</a>
    <a href="dip.php?pag=diphom" class="w3-button w3-theme-d5 w3-round w3-border-theme" >&olarr;</a>  </p>'."\n";
 echo "</div>"."\n";    
   

echo '<div class="w3-container w3-half">'."\n";
echo '<p class="w3-right">&nbsp;&nbsp;&nbsp;<a href="dip.php?pag=" class="w3-button w3-theme-d5 w3-round w3-border-theme" ><img src="img\casa_2.png"></a></p>'."\n";
echo "</div>"."\n";
    

//creazione tabella dipendente 
   echo '<div class="w3-container">'."\n";
   $q="select * from dipendente";
   $rq=mysql_query($q) or die("errore query selezione");
   
   echo '<table class="w3-table w3-border-theme">'."\n";
   echo "<th>Matricola</th><th>Nome</th><th>Cognome</th><th>Data nascita</th><th>Professione</th>"."\n";
   
   
   while($riga=mysql_fetch_assoc($rq))
   {
      echo "<tr>"."\n";
      echo "<td>".$riga["matricola"]."</td>"."\n";
      echo "<td>".$riga["nome"]."</td>"."\n";
      echo "<td>".$riga["cognome"]."</td>"."\n";
      echo "<td>".$riga["datan"]."</td>"."\n";
      echo "<td>".$riga["professione"]."</td>"."\n";
      //echo "<td>".$riga["redann"]."</td>"."\n";
      //echo "<td>".$riga["numfam"]."</td>"."\n";
      //echo "<td>".$riga["trattenute"]."</td>"."\n";
     // echo "<td>".$riga["azienda_idazienda"]."</td>"."\n";
                              
      echo "</tr>"."\n"; 
   }    
   echo "</table>"."\n";
   echo "</div>"."\n";
   
   //cambio database---------------------------------------------------------------------------------------------------------------------------------------
   echo "<br>"."\n";
   echo '<div class="w3-container w3-third">'."\n";
    echo '<h5>Cambia Database '."&nbsp;&nbsp;&nbsp;".'<a href="dip.php?pag=verhom" class="w3-button w3-theme-d5 w3-round w3-border-theme" >Versamenti</a>
    &nbsp;&nbsp;&nbsp;<a href="dip.php?pag=azihom" class="w3-button w3-theme-d5 w3-round w3-border-theme" >Aziende</a></h5>'."\n";
  echo "</div>"."\n";
       
//barra di impaginazione
  //background-color: #20295b;
   echo '<div style=" position: fixed; left: 0; bottom: 45px; width: 100%; background-color:#3949a3; color: white; text-align: center;"">'."\n";
      echo '<ul class="pagination">';
         echo '<li><a href="dip.php?pag=dipdet">«</a></li>';
         echo '<li><a class="active" href="dip.php?pag=diphom">TABELLA BASE</a></li>';
         echo '<li><a href="dip.php?pag=dipinf">INFO</a></li>';
         echo '<li><a href="dip.php?pag=dipmod">MODIFICA</a></li>';
         echo '<li><a href="dip.php?pag=dipdet">DETTAGLI</a></li>';         
        echo '<li><a href="dip.php?pag=dipinf">&raquo;</a></li>';         
      echo "</ul>";
   echo "</div>"."\n";
   
   
   
   footergen();
   closer();     
}    


if($pag=='dipinf')
{
      
    testata();
    headerdip();
    
$q="select * from dipendente";
$rq=mysql_query($q) or die ("errore selezione dipendenti table");
$nr=mysql_num_rows($rq) or die ("errore rilevazione numero record");

$qMasred="SELECT MAX(redann) FROM `dipendente`";
$Masred=mysql_query($qMasred) or die ("errore query");

$qmasred="SELECT MIN(redann) FROM `dipendente`";
$masred=mysql_query($qmasred) or die ("errore query");

if($rq!=null)
$att=1;
else
$att=0;

//barra delle azioni
    echo '<div class="w3-container w3-half">'."\n";
    echo '<p><a href="#" class="w3-button w3-theme-d5 w3-round w3-border-theme" >+</a>
    <a href="dip.php?pag=dipinf" class="w3-button w3-theme-d5 w3-round w3-border-theme" >&olarr;</a>  </p>'."\n";
 echo "</div>"."\n";    
   

         echo '<div class="w3-container w3-half">'."\n";
    echo '<p class="w3-right">&nbsp;&nbsp;&nbsp;<a href="dip.php?pag=" class="w3-button w3-theme-d5 w3-round w3-border-theme" ><img src="img\casa_2.png"></a></p>'."\n";
  echo "</div>"."\n";
    

echo "<br><br><br>"."\n";
echo '<div class="w3-row w3-border">';
echo '<div class="w3-third w3-container">';

  echo "<p>&nbsp;</p>";

echo "</div>";
echo '<div class="w3-third w3-container">';
      echo '<table class="w3-table w3-theme-l1">'."\n";
      echo "<tr>"."\n";
         echo "<td>Stato Database</td>"."\n";
         echo "<td>".($att==0?"Non Attivo":"Attivo")."</td>"."\n";
      echo "</tr>"."\n";
            echo "<tr>"."\n";
         echo "<td>Nome Database</td>"."\n";
         echo "<td>dipendente</td>"."\n";
      echo "</tr>"."\n";
      echo "<tr>"."\n";
         echo "<td>Numero record</td>"."\n";
         echo "<td>".$nr."</td>"."\n";
      echo "</tr>"."\n";
      echo "<tr>"."\n";
         echo "<td>Massimo Reddito</td>"."\n";
         echo "<td>".$Masred."</td>"."\n";
      echo "</tr>"."\n";
         echo "<td>Minimo Reddito</td>"."\n";
         echo "<td>".$masred."</td>"."\n";
      echo "</tr>"."\n";        
      echo '</table>'."\n";    
  
   echo "<br>"."\n";  
echo "</div>";
echo '<div class="w3-third w3-container">';
echo "<p>&nbsp;</p>";
echo "</div>";
echo "</div>";

//barra di impaginazione
  //background-color: #20295b;
   echo '<div style=" position: fixed; left: 0; bottom: 45px; width: 100%; background-color:#3949a3; color: white; text-align: center;"">'."\n";
      echo '<ul class="pagination">';
         echo '<li><a href="dip.php?pag=diphom">«</a></li>';

         echo '<li><a  href="dip.php?pag=diphom">TABELLA BASE</a></li>';
         echo '<li><a href="dip.php?pag=dipinf" class="active">INFO</a></li>';
         echo '<li><a href="dip.php?pag=dipmod">MODIFICA</a></li>';
         echo '<li><a href="dip.php?pag=dipdet">DETTAGLI</a></li>';         
        echo '<li><a href="dip.php?pag=dipmod">&raquo;</a></li>';         
      echo "</ul>";
   echo "</div>"."\n";
 

   footergen();
   closer();     
}   


if($pag=='dipmod')
{
   testata();
   headerdip();
//barra delle azioni
    echo '<div class="w3-container w3-half">'."\n";
    echo '<p><a href="" class="w3-button w3-theme-d5 w3-round w3-border-theme" >+</a>
    <a href="dip.php?pag=dipmod" class="w3-button w3-theme-d5 w3-round w3-border-theme" >&olarr;</a>  </p>'."\n";
 echo "</div>"."\n";    
   

         echo '<div class="w3-container w3-half">'."\n";
    echo '<p class="w3-right">&nbsp;&nbsp;&nbsp;<a href="dip.php?pag=" class="w3-button w3-theme-d5 w3-round w3-border-theme" ><img src="img\casa_2.png"></a></p>'."\n";
  echo "</div>"."\n";
    
    //creazione tabella dipendente 
   echo '<div class="w3-container">'."\n";
   $q="select * from dipendente";
   $rq=mysql_query($q) or die("errore query selezione");
   
   echo '<table class="w3-table w3-border-theme">'."\n";
   echo "<th>Matricola</th><th>Nome</th><th>Cognome</th><th>Azione</th>"."\n";
   
   
   while($riga=mysql_fetch_assoc($rq))
   {
      echo "<tr>"."\n";
      echo "<td>".$riga["matricola"]."</td>"."\n";
      echo "<td>".$riga["nome"]."</td>"."\n";
      echo "<td>".$riga["cognome"]."</td>"."\n";
      echo '<td><a href="dip.php?pag=dipmod1&matricola='.$riga["matricola"].'" class="w3-button w3-green w3-round">MODIFICA RECORD</a></td>'."\n";                
      echo "</tr>"."\n"; 
   }    
   echo "</table>"."\n";
   echo "</div>"."\n";
   
  //barra di impaginazione
  //background-color: #20295b;
   echo '<div style=" position: fixed; left: 0; bottom: 45px; width: 100%; background-color:#3949a3; color: white; text-align: center;"">'."\n";
      echo '<ul class="pagination">';
         echo '<li><a href="dip.php?pag=dipinf">«</a></li>';

         echo '<li><a  href="dip.php?pag=diphom">TABELLA BASE</a></li>';
         echo '<li><a href="dip.php?pag=dipinf" >INFO</a></li>';
         echo '<li><a href="dip.php?pag=dipmod" class="active">MODIFICA</a></li>';
         echo '<li><a href="dip.php?pag=dipdet">DETTAGLI</a></li>';         
        echo '<li><a href="dip.php?pag=dipdet">&raquo;</a></li>';         
      echo "</ul>";
   echo "</div>"."\n";
  
   
   footergen();
   closer();   
}
if($pag=='dipmod1')
{
   testata();
   headerdip();
       $idc = filter_input(INPUT_GET,'matricola',FILTER_VALIDATE_INT);
    $q = "select * from dipendente where matricola=".$idc;
    
  // $q="select * from dipendenti where matricola='".$_GET["matricola"]."'";
   $rq=mysql_query($q) or die ("errore select con restrizioni");
   
   $rec=mysql_fetch_assoc($rq);

      echo '<div class="w3-container">'."\n";
   echo "<h3>Form Modifica dipendente</h3>"."\n";
   echo "</div>"."\n";
   
   echo '<div class="w3-container w3-theme-l2">'."\n";
   echo '<form method="GET" action="dip.php">'."\n";
   echo '<p>Nome: <input type="text" name="nome" class="w3-text w3-input" value="'.$rec["nome"].'"></p>'."\n";
   echo '<p>Cognome: <input type="text" name="cognome" class="w3-text w3-input" value="'.$rec["cognome"].'"></p>'."\n";
   echo '<p>Data di nascita: <input type="date" name="datan" class="w3-number w3-input" value="'.$rec["datan"].'"></p>'."\n";
   echo '<p>Professione: <input type="text" name="professione" class="w3-text w3-input" value="'.$rec["professione"].'"></p>'."\n";
   echo '<p>Reddito annuale: <input type="number" name="redann" class="w3-number w3-input" value="'.$rec["redann"].'"></p>'."\n";
   echo '<p>Numero componenti famiglia: <input type="number" name="numfam" class="w3-number w3-input" value="'.$rec["numfam"].'"></p>'."\n";
   echo '<p>Trattenuta: <input type="number" name="trattenute" class="w3-number w3-input" value="'.$rec["trattenute"].'"></p>'."\n";
   echo '<p>ID azienda di appartenenza: <input type="number" name="azienda_idazienda" class="w3-number w3-input" value="'.$rec["azienda_idazienda"].'"></p>'."\n";
   echo '<input type="hidden" name="pag" value="dipmod2"></p>'."\n";
      echo '<input type="hidden" name="matricola" value="'.$_GET["matricola"].'"></p>'."\n";
   echo '<div class="w3-rows">'."\n";
   echo '<div class="w3-container w3-half">'."\n";
   echo '<p><input type="submit" value="CONFERMA" class="w3-button w3-round w3-theme-d5 "></p>'."\n";
   echo "</div>"."\n";
   echo '<div class="w3-container w3-half">'."\n";
   echo '<p class="w3-right"><a class="w3-button w3-round w3-theme-d5" href="dip.php?pag=diphom">INDIETRO</a></p>'."\n";
   echo "</div>"."\n";
   
   echo "</div>"."\n";
   echo "</form>"."\n";
   echo "</div>"."\n";
   
   
   footergen();
   closer();   
}

if($pag=='dipmod2')
{

$q = "update dipendente set ";
$q.= "nome='".mysql_real_escape_string(html_entity_decode($_GET["nome"]))."',";
$q.= "cognome='".mysql_real_escape_string(html_entity_decode($_GET["cognome"]))."',";
$q.= "datan='".mysql_real_escape_string(html_entity_decode($_GET["datan"]))."',";
$q.= "professione='".mysql_real_escape_string(html_entity_decode($_GET["professione"]))."',";
$q.= "redann='".mysql_real_escape_string(html_entity_decode($_GET["redann"]))."',";
$q.= "numfam='".mysql_real_escape_string(html_entity_decode($_GET["numfam"]))."',";
$q.= "trattenute='".mysql_real_escape_string(html_entity_decode($_GET["trattenute"]))."',";
$q.= "azienda_idazienda='".mysql_real_escape_string(html_entity_decode($_GET["azienda_idazienda"]))."' ";
$q.= "where matricola=".$_GET["matricola"];
$ris = mysql_query($q) or die("errore con il salvataggio delle modifiche");

   header("Location: dip.php");    
}



if($pag=='dipdet')
{
   testata();
   headerdip();
//barra delle azioni
    echo '<div class="w3-container w3-half">'."\n";
    echo '<p><a href="#" class="w3-button w3-theme-d5 w3-round w3-border-theme" >+</a>
    <a href="dip.php?pag=dipdet" class="w3-button w3-theme-d5 w3-round w3-border-theme" >&olarr;</a>  </p>'."\n";
 echo "</div>"."\n";    
   

         echo '<div class="w3-container w3-half">'."\n";
    echo '<p class="w3-right">&nbsp;&nbsp;&nbsp;<a href="dip.php?pag=" class="w3-button w3-theme-d5 w3-round w3-border-theme" ><img src="img\casa_2.png"></a></p>'."\n";
  echo "</div>"."\n";
  
  
   
    //creazione tabella dipendente 
   echo '<div class="w3-container">'."\n";
   $q="select * from dipendente";
   $rq=mysql_query($q) or die("errore query selezione");
   
   echo '<table class="w3-table w3-border-theme">'."\n";
   echo "<th>Matricola</th><th>Nome</th><th>Cognome</th><th>Vedi Dettagli</th>"."\n";
   
   
   while($riga=mysql_fetch_assoc($rq))
   {
      echo "<tr>"."\n";
      echo "<td>".$riga["matricola"]."</td>"."\n";
      echo "<td>".$riga["nome"]."</td>"."\n";
      echo "<td>".$riga["cognome"]."</td>"."\n";
      echo '<td><a href="dip.php?pag=dipdet1&matricola='.$riga["matricola"].'" class="w3-button w3-green w3-round">&ocir;</a></td>'."\n";                
      echo "</tr>"."\n"; 
   }    
   echo "</table>"."\n";
   echo "</div>"."\n";
   
    
  //barra di impaginazione
  //background-color: #20295b;
   echo '<div style=" position: fixed; left: 0; bottom: 45px; width: 100%; background-color:#3949a3; color: white; text-align: center;"">'."\n";
      echo '<ul class="pagination">';
         echo '<li><a href="dip.php?pag=dipmod">«</a></li>';

         echo '<li><a  href="dip.php?pag=diphom">TABELLA BASE</a></li>';
         echo '<li><a href="dip.php?pag=dipinf" >INFO</a></li>';
         echo '<li><a href="dip.php?pag=dipmod" >MODIFICA</a></li>';
         echo '<li><a href="dip.php?pag=dipdet" class="active">DETTAGLI</a></li>';         
        echo '<li><a href="dip.php?pag=diphom">&raquo;</a></li>';         
      echo "</ul>";
   echo "</div>"."\n";
  
   
   footergen();
   closer();   
}

if($pag=='dipdet1')
{
   testata();
   headerdip();
   
//barra delle azioni
    echo '<div class="w3-container w3-border">'."\n";
    echo '<p ><a href="dip.php?pag=dipdet" class="w3-button w3-theme-d5 w3-round w3-border-theme w3-left" >Indietro</a>
<a href="dip.php?pag=" class="w3-button w3-theme-d5 w3-round w3-border-theme w3-right"
    ><img src="img\casa_2.png"></a></p>'."\n";
  echo "</div>"."\n";
  
$idc = filter_input(INPUT_GET,'matricola',FILTER_VALIDATE_INT);  
$q="select * from dipendente where matricola=".$idc;
$rq=mysql_query($q) or die ("errore selezione record");
$rec=mysql_fetch_assoc($rq);
echo "<br><br>";

 
echo '<div class="w3-container w3-theme-d1 w3-border">'."\n";
echo "<h3>Dettagli dipendente</h3>"."\n";
echo '<ul class="w3-ul">'."\n";
echo '<li>Matricola: '.$rec["matricola"]."</li>"."\n";
echo '<li>Nome: '.$rec["nome"]."</li>"."\n";
echo '<li>Cognome: '.$rec["cognome"]."</li>"."\n";
echo '<li>Data di nascita: '.$rec["datan"]."</li>"."\n";
echo '<li>Professione: '.$rec["professione"]."</li>"."\n";
echo '<li>Reddito anno: '.$rec["redann"]."</li>"."\n";
echo '<li>Numero componenti famiglia: '.$rec["numfam"]."</li>"."\n";
echo '<li>Trattenute: '.$rec["trattenute"]."</li>"."\n";
echo '<li>Azienda di partenenza: '.$rec["azienda_idazienda"]."</li>"."\n";
echo "<li>&nbsp;</li>"."\n";
echo "</ul>"."\n";
echo "</div>"."\n";
   
   footergen();
   closer();  
}



if($pag=='insdip')
{
   testata();
   headerdip();

   echo '<div class="w3-container">'."\n";
   echo "<h3>Form Inserimento nuovo dipendente</h3>"."\n";
   echo "</div>"."\n";
   
   echo '<div class="w3-container w3-theme-l2">'."\n";
   echo '<form method="GET" action="dip.php">'."\n";
   echo '<p>Nome: <input type="text" name="nome" class="w3-text w3-input"></p>'."\n";
   echo '<p>Cognome: <input type="text" name="cognome" class="w3-text w3-input"></p>'."\n";
   echo '<p>Data di nascita: <input type="date" name="datan" class="w3-number w3-input"></p>'."\n";
   echo '<p>Professione: <input type="text" name="professione" class="w3-text w3-input"></p>'."\n";
   echo '<p>Reddito annuale: <input type="number" name="redann" class="w3-number w3-input"></p>'."\n";
   echo '<p>Numero componenti famiglia: <input type="number" name="numfam" class="w3-number w3-input"></p>'."\n";
   echo '<p>Trattenuta: <input type="number" name="trattenute" class="w3-number w3-input"></p>'."\n";
   echo '<p>ID azienda di appartenenza: <input type="number" name="azienda_idazienda" class="w3-number w3-input"></p>'."\n";
   echo '<input type="hidden" name="pag" value="insdip1"></p>'."\n";
   echo '<div class="w3-rows">'."\n";
   echo '<div class="w3-container w3-half">'."\n";
   echo '<p><input type="submit" value="CONFERMA" class="w3-button w3-round w3-theme-d5 "></p>'."\n";
   echo "</div>"."\n";
   echo '<div class="w3-container w3-half">'."\n";
   echo '<p class="w3-right"><a class="w3-button w3-round w3-theme-d5" href="dip.php?pag=diphom">INDIETRO</a></p>'."\n";
   echo "</div>"."\n";
   
   echo "</div>"."\n";
   echo "</form>"."\n";
   echo "</div>"."\n";
   
   footergen();
   closer();     
}

if($pag=='insdip1')
{
$q="INSERT INTO `dipendente` (`matricola`, `nome`, `cognome`, `datan`, `professione`, `redann`, `numfam`, `trattenute`, `azienda_idazienda`)
VALUES (NULL, '".$_GET["nome"]."', '".$_GET["cognome"]."', '".$_GET["datan"]."', '".$_GET["professione"]."', '".$_GET["redann"]."', '".$_GET["numfam"]."', '".$_GET["trattenute"]."', '".$_GET["azienda_idazienda"]."');";
$rq=mysql_query($q) or die("errore query inserimento");

header("Location: dip.php?pag=diphom"); 
}











//AZIENDA *********************************************************************************************************************
if($pag=='azihom')
{
    testata();
    headerazi();
    
    echo '<div class="w3-container">'."\n";
    echo '<p><a href="#" class="w3-button w3-theme-d5 w3-round w3-border-theme" >+</a></p>'."\n";
    echo "</div>"."\n";    

   echo '<div class="w3-container">'."\n";
   $q="select * from azienda";
   $rq=mysql_query($q) or die("errore query selezione");
   
   echo '<table class="w3-table w3-border-theme">'."\n";
   echo "<th>ID</th><th>Nome</th><th>Indirizzo</th><th>N°</th><th>Comune</th><th>Settore</th>"."\n";
   
   while($riga=mysql_fetch_assoc($rq))
   {
      echo "<tr>"."\n";
      echo "<td>".$riga["idazienda"]."</td>"."\n";
      echo "<td>".$riga["nome"]."</td>"."\n";
      echo "<td>".$riga["indirizzo"]."</td>"."\n";
      echo "<td>".$riga["numcivic"]."</td>"."\n";
      echo "<td>".$riga["comune"]."</td>"."\n";
      echo "<td>".$riga["settore"]."</td>"."\n";
      echo "</tr>"."\n";
   }    
   echo "</table>"."\n"; 
   echo "</div>"."\n";    
        
     //cambio database---------------------------------------------------------------------------------------------------------------------------------------
   echo "<br>"."\n";
   echo '<div class="w3-container w3-third">'."\n";
    echo '<h5>Cambia Database '."&nbsp;&nbsp;&nbsp;".'<a href="dip.php?pag=verhom" class="w3-button w3-theme-d5 w3-round w3-border-theme" >Versamenti</a>
    &nbsp;&nbsp;&nbsp;<a href="dip.php?pag=diphom" class="w3-button w3-theme-d5 w3-round w3-border-theme" >Dipendenti</a></h5>'."\n";
  echo "</div>"."\n";
      
    
    footergen();
    closer();     
} //***************************************
if($pag=='verhom')
{
    testata();
    headerver();
    
    echo '<div class="w3-container">'."\n";
    echo '<p><a href="#" class="w3-button w3-theme-d5 w3-round " >+</a></p>'."\n";
    echo "</div>"."\n";    

   echo '<div class="w3-container ">'."\n";
   $q="select * from versamento";
   $rq=mysql_query($q) or die("errore query selezione");
   
   echo '<table class="w3-table-all">'."\n";
   echo "<th>ID</th><th>Tipo</th><th>Data versamento</th><th>Importo</th><th>Dipendente</th>"."\n";
   while($riga=mysql_fetch_assoc($rq))
   {
      echo "<tr>"."\n";
      echo "<td>".$riga["idversamento"]."</td>"."\n";
      echo "<td>".$riga["tipo"]."</td>"."\n";
      echo "<td>".$riga["datavers"]."</td>"."\n";
      echo "<td>".$riga["importo"]."</td>"."\n";
      echo "<td>".$riga["dipendente_matricola"]."</td>"."\n";
      echo "</tr>"."\n";
   }    
   echo "</table>"."\n"; 
   echo "</div>"."\n";    
     
      //cambio database---------------------------------------------------------------------------------------------------------------------------------------
   echo "<br>"."\n";
   echo '<div class="w3-container w3-third">'."\n";
    echo '<h5>Cambia Database '."&nbsp;&nbsp;&nbsp;".'<a href="dip.php?pag=diphom" class="w3-button w3-theme-d5 w3-round w3-border-theme" >Dipendenti</a>
    &nbsp;&nbsp;&nbsp;<a href="dip.php?pag=azihom" class="w3-button w3-theme-d5 w3-round w3-border-theme" >Aziende</a></h5>'."\n";
  echo "</div>"."\n";
     
    
    footergen();
    closer();     
} 


















//****************************************************************************************************************************

//FUNZIONI

//****************************************************************************************************************************


function testata()
{
echo "<!DOCTYPE html>"."\n";
echo "<html>"."\n";
echo "<head>"."\n";

//transazione solo in internet explorer . non serve a nulla lo so

//*****************************************************************************************
echo '<meta http-equiv="Page-Enter" content="revealTrans(Duration=6,Transition=4)">'."\n";
echo '<meta http-equiv="Page-Exit" content="revealTrans(Duration=6,Transition=24)">'."\n";
echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">'."\n";
//*****************************************************************************************

echo '<link rel="stylesheet" href="barraimpaginazione.css">'."\n";
echo '<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">'."\n";
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">'."\n";
echo '<meta charset="UTF-8">'."\n";
echo '<meta lang="it">'."\n";
echo "<title>index.php</title>"."\n";
echo "</head>"."\n";
echo '<body class="w3-theme-l4">'."\n";
}


function closer(){
echo "</body>"."\n";
echo "</html>"."\n";
}
function headerhome()
{

echo '<div class="w3-theme-d5  w3-container">'."\n";
echo '<h1 class="w3-center" >HOME PAGE GESTIONE DATABASE </h1>'."\n";
/*
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
*/
echo "</div>"."\n";
}
function headerdip()
{

echo '<div class="w3-theme-d5  w3-container">'."\n";
echo '<h1 class="w3-center" >GESTIONE DATABASE DIPENDENTI</h1>'."\n";
/*
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
*/
echo "</div>"."\n";
}
function headerver()
{

echo '<div class="w3-theme-d5  w3-container">'."\n";
echo '<h1 class="w3-center" >GESTIONE DATABASE VERSAMENTI</h1>'."\n";
/*
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
*/
echo "</div>"."\n";
}
function headerazi()
{

echo '<div class="w3-theme-d5  w3-container">'."\n";
echo '<h1 class="w3-center" >GESTIONE DATABASE AZIENDE</h1>'."\n";
/*
echo "<br>"."<br>"."<br>"."\n";
echo "<hr>"."\n";
*/
echo "</div>"."\n";
}
function footergen()
{
   //footer--------------------------------------------------------------------------------
         echo "<br><br><br><br>";
          echo '<div style=" position: fixed; left: 0; bottom: 0; width: 100%; background-color: #20295b;
          color: white; text-align: center;">'."\n";
          echo "<p>&copy; Mattia Daday</p>"."\n";
          echo "</div>"."\n"; 
}








$close=mysql_close($conn) or die("errore chiusura connessione");
?>