<!--<link rel="stylesheet" href="renseignement.css">-->
<!--la ligne de code au dessus sert a relier avec un ficher .css-->

<!--<div class="color">-->
<!--<div class="style">-->

<h2> Veuillez entre vos coordonnées : </h2>
<form action="fiche_register.php" method="GET">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="username">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="userprenom">
    </div>
    <div>
        <label for="etablissement">Etablissement :</label>
        <input type="text" id="etablissement" name="useretablissement">
    </div>
    <div>
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="userville">
    </div>
    <div>
        <label for="date">Date de naissance :</label>
        <input type="date" id="date" name="userdate">
    </div>
    <div>
        <label for="département">Département :</label>
        <input type="departement" id="departement" name="userdepartement">
    </div>

 <h2>Vous voulez vous connecter en tant que: :</h2>
 <input type="radio" name="site[]" value="Enseignenment"> Enseignant 
 <input type="radio" name="site[]" value="Education"> Etudiants
 <input type="radio" name="site[]" value="Administration"> Administrateur

 <a href="fiche_register.php"><input type="submit" value="Enregister" ></a>
 <input type="submit" value="Annuler" >

</form>


