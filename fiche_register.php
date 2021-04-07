<H2> Fiche de renseignement</H2>
<p>Voici les information que vous avez fournie:</p>

<?php

$username= $_GET['username'];
$userprenom= $_GET['userprenom'];
$useretablissement= $_GET['useretablissement'];
$userville= $_GET['userville'];
$userdepartement= $_GET['userdepartement'];
$userdate= $_GET['userdate'];

echo("Son nom :$username");
echo "<br>";
echo("Son prenom : $userprenom"); 
echo "<br>";
echo("Sa date de naissance : $userdate");
echo "<br>";
echo("Son établissement : $useretablissement");
echo "<br>";
echo("Sa ville : $userville"); 
echo "<br>";
echo("Son département : $userdepartement"); 
echo "<br>";
echo "<br>";
echo ("Cette personne est un :");

$site=$_GET['site'];
for ($i=0; $i<count($site); $i++) {
    echo "<p>".$site[$i]."</p>";
}
echo "<br>"

?> 