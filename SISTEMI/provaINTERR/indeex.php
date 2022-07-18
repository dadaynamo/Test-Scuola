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
<div class="w3-container">
<h1 class="w3-lime w3-center">ciao</h1>
<p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipog
rafia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard s
in dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di cara
tteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più 
di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzia
lmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri
trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software d
i impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.
</p>
</div>
<hr>
<br>
<div class="w3-container w3-half">
<p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipog
rafia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard s
in dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di cara
tteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più 
di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzia
lmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri
trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software d
i impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.
</p>
</div>
<div class="w3-container w3-half">
<p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipog
rafia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard s
in dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di cara
tteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più 
di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzia
lmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri
trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software d
i impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.
</p>
</div>

<?php

 $x=6;

echo "<p>";
echo $x;
echo "</p>";



?>




<div class="w3-container w3-half">
<p class="w3-blue w3-button"><a href="https://web.spaggiari.eu/fml/app/default/regclasse_lezioni_xstudenti.php" target="_blank">classeviva</a></p>
</div>
<div class="w3-container w3-half">
<img src="i.jpg" alt="foto rocky" class="w3-image">

</div>

<?php

for($i=0;$i<100;$i++)
{
echo "<p>".$i."</p>"."\n";




}



?>


<form method="get" action="pag2.php">
<input type="text" name="cognome" required>
<p>inserisci età <input type="number" min="10" max="20" name="eta"></p>
<input type="submit" value="conferma">
</form>






</body>


</html>