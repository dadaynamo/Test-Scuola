<!DOCTYPE html>
<html>
<head>
<title>prova interr</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta lang="it">
</head>

<body>
<h1 class="w3-h1"></h1>
<?php
echo '<div class="w3-container w3-blue">';
echo '<table class="w3-table">';
for($n=1;$n<$_GET["rig"];$n++)
{
echo "<tr>";
for($k=1;$k<$_GET["col"];$k++)
{
echo "<td>".$k*$n."</td>";

}
echo "</tr>";
}
echo "</table>";




echo "</div>";
?>
</body>
</html>