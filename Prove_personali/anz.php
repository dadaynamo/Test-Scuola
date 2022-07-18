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

          echo '<div style=" position: fixed; left: 0; bottom: 0; width: 100%; background-color: teal; color: white; text-align: center;">'."\n";
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


if($_GET["pag"]=='')
{
testata();
header1();
echo '<div class="w3-container ">'."\n";
echo '<form action="anz.php" method="get">';
echo '<label>What Destination Would you Like to Go To?</label><br>';
echo '<input type="checkbox" name="Islands[]" value="Aruba- Aruba is a beatiful desert island">Aruba<br>';
echo '<input type="checkbox" name="Islands[]" value="Hawaii- Hawaii is a beautiful strand of islands located in the heart of the Pacific Ocean.">Hawaii<br>';
echo '<input type="checkbox" name="Islands[]" value="Jamaica- Jamaica is a beautiful island located in the Caribbean Sea">Jamaica<br>';
echo '<input type="hidden" value="stamp" name="pag">';
echo '<input type="submit" name="button" value="Submit"/></form>';
echo "</div>"."\n";
footergen();
closer();

}

if($_GET["pag"]=='stamp')
{
testata();
header1();
echo '<div class="w3-container ">'."\n";


$destinations= $_GET['Islands'];
if(isset($destinations))
{
	echo 'You have chosen:' . '<br>' . '<br>';
	echo "<ul>";

	foreach ($destinations as $key => $value)
	{
		echo "<li>.$value.</li>";
        echo "<li>.$key.</li>";
	}
	echo "</ul>";

}

else 
{
	echo "You haven't selected any destination";
}
echo "</div>"."\n";

footergen();
closer();

}













?>