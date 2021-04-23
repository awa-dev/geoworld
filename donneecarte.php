<?php
require_once 'header.php';
?>

<?php
require_once 'inc/manager-db.php';
if(isset($_GET['continent'])) { //isset Détermine si une variable est considérée définie, ceci signifie qu'elle est déclarée et est différente de null
    $continent = $_GET['continent']; // $_GET récupère les éléments
} else {
    $continent = 'Asie' ; // $continent définie sur Asia
}
$desPays = getCountriesByContinent($continent); // récupère tout le tableau des continents notamment le continent Asia

?>

<main role="main" class="flex-shrink-0">

    <div class="container">
        <h1>Les pays en <?php echo $continent ?></h1>

        <div>
            <table class="table">
                <tr>
                    <th>Nom</th>
                    <th>Population</th>
                    <th>Continent</th>

                </tr>
                <?php
                // $desPays est un tableau dont les éléments sont des objets représentant
                // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
                foreach ($desPays as $pays) :
                    ?>
                    <tr>
                        <td> <?php echo $pays->Name // '->' défini le membre de l'objet instancié dans la variable à gauche de l’opérateur ?></td>
                        <td> <?php echo $pays->Population ?></td>
                        <td><?php echo $pays->Continent ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>

        <p>
            <code>
                <?php
                //var_dump($desPays[0]); //  affiche les informations structurées d'une variable, y compris son type et sa valeur.
                ?>
            </code>
        </p>
        <a href='index.php'> RetourHome</a>

    </div>
</main>
