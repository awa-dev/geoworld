<?php
session_start();
/**
 * PAGE INDEX
 *
 * PHP version 7
 *
 * @category  INDEX
 * @package   Application
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>

<?php
require_once 'header.php';
require_once './inc/manager-db.php';
?>
<link rel="stylesheet" type="text/css" href="custom.css" />

<body>
    <div class="columns is-mobile is-centered">
        <div class="column is-half">
            <?php
            if (isset($_SESSION['login'])) {
                echo '<p class="title is-1 is-spaced">Les continents !</p>';
                require_once 'word-map.php';
            } else {
                echo '
                    <p class="title is-1 is-spaced">Bienvenue sur Geoworld 👋</p>
                    <p class="subtitle is-3">Geoworld est un site internet sur lequel il est possible de consulter des informations concernant les différents pays à travers le monde.</p>
                    <p class="subtitle is-4"> Projet disponnible sur : <i class="fab fa-github-alt"></i></p>';
            }
            ?>
        </div>
    </div>
</body>

<?php
require_once 'footer.php';
?>