<?php
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

function closer(){
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

function footergen()
{
   //footer--------------------------------------------------------------------------------

          echo '<div style=" position: fixed; left: 0; bottom: 0; width: 100%; background-color: teal; color: white; text-align: center;>'."\n";
          echo "<p>&copy Mattia Daday</p>"."\n";
          echo "</div>"."\n"; 
    /*      
       .mattiafooter {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: teal;
   color: white;
   text-align: center;
}
 */
	
}
//********************************************************************************************************************************************************************************************************
















?>