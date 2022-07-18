<?php

  
  //filtraggio per le pagine
  $pag=filter_input(INPUT_GET,'pag',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  
  if($pag=='')
  {
   testatacar();

   
   echo '<div class="w3-container w3-center w3-display-middle ">'."\n";
  echo "<h1>Attendi Caricamento</h1>"."\n";
  //echo "<p>Effetto a caso del daddy:</p>"."\n";
  echo '<p><i class="fa fa-spinner w3-spin" style="font-size:64px"></i></p>'."\n";
   echo "</div>\n";
          
 header( "refresh:10;url=vet.php?pag=veth" );         
          
   footergen();       
   closer();       
          
  }
    elseif($pag=='veth')
  {
        testata();
      echo '<div class="w3-container w3-center w3-animate-opacity">'."\n";

  echo '<div class="w3-card-4 w3-display-topmiddle" ">'."\n";
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

echo "</div>"."\n";
echo "</div>"."\n";
echo "<br><br><br>"."\n";





   //************************************************************************************************************************************************
  //barra gestione pagine in basso con freccie sinistra e destra
 //barra di impaginazione
  //background-color: #20295b;
   echo '<div style=" position: fixed; left: 0; bottom: 45px; width: 100%; background-color:#3949a3; color: white; text-align: center;"">'."\n";
      echo '<ul class="pagination">';
         echo '<li><a href="dip.php?pag=diphom">«</a></li>';
         echo '<li><a  href="dip.php?pag=diphom">HOME</a></li>';
         echo '<li><a href="dip.php?pag=dipinf" class="active">ANIMALI</a></li>';
         echo '<li><a href="dip.php?pag=dipmod">PROPRIETARI</a></li>';
         echo '<li><a href="dip.php?pag=dipdet">VISITE</a></li>';         
        echo '<li><a href="dip.php?pag=dipmod">&raquo;</a></li>';         
      echo "</ul>";
   echo "</div>"."\n";
          footergen();

          closer();      
  }
     
        
  elseif($pag=='veta')
  {
        testata();
           headerh();     
   echo '<div class="w3-container w3-center">'."\n";  
   echo "<p>pagina due</p>";
      echo "</div>\n";
       footergen();       
   closer();      
  }

  elseif($pag=='vetv')
  {
          
   
          
  }

  elseif($pag=='vetp')
  {
          
   
          
  }

  elseif($pag=='veth')
  {
          
   
          
  }
        
function testata(){
echo "<!DOCTYPE html>"."\n";
echo "<html>"."\n";
echo "<head>"."\n";
echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">'."\n";
echo '<link rel="stylesheet" href="barraimpaginazione.css">'."\n";
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
function testatacar(){
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

function closer(){
echo "</body>"."\n";
echo "</html>"."\n";
}
function headerh()
{

echo '<div class="w3-container">'."\n";
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
  echo "<br><br><br>"."\n";
          echo '<div style=" position: fixed; left: 0; bottom: 0; width: 100%; background-color: teal; color: white; text-align: center;">'."\n";
          echo "<p>&copy Mattia Daday</p>"."\n";
          echo "</div>"."\n"; 
}



?>

