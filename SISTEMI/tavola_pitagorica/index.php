<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="w3mod.css" type="text/css">
<title>prima prova</title>
</head>
<body>
<!-- header -->

<div class="w3-container w3-teal">
<h1 class="w3-text-aqua">ciao mondo</h1>
</div>

<hr>
<!-- tabella generata -->
<!-- <div class="w3-container w3-teal"> -->
<?php
echo '<table class="w3-table-all w3-responsive">';
for($i=1;$i<$_GET["righe"]+1;$i++)
{
	echo "<tr>\n";
    for($j=1;$j<$_GET["colonne"]+1;$j++)
    {
    	echo "<td>".$i*$j."</td>\n";
    }
    echo "</tr>\n";
    
}
?>
<!-- </div> -->



</body>
</html>
