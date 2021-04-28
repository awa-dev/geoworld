<?php
session_start();
/**
 * PAGE HEADER
 *
 * PHP version 7
 *
 * @category  Page_Fragment
 * @package   Application
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>

<?php
require_once './inc/manager-db.php';
$desContinents = getContinents();
?>

<!DOCTYPE HTML5 />
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css" />
  <script src="https://kit.fontawesome.com/61b7db3d58.js" crossorigin="anonymous"></script>
  <meta name="description" content="Geoworld est un site éducatif de géographique à destination des élèves et du corps enseignant." />
  <title>Page d'accueil : Geoworld</title>
</head>
<header>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.php">
        <img src="./img/world-logo.png" with="122" height="28">
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarExamples">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarExamples" class="navbar-menu is-active">
      <div class="navbar-start">
        <a class="navbar-item" href="index.php">Acceuil</a>
      </div>
      <?php
      if (!empty($_SESSION["login"])) {
        echo '<div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">Continents</a>
        <div class="navbar-dropdown">';
        foreach ($desContinents as $continent) {
          echo '<a class="dropdown-item" href="data.php?continent=' . $continent->Continent . '">' . $continent->Continent . '</a>';
        }
        echo '</div>
      </div>';
      }
      ?>
    </div>

    <nav class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <?php
          if (!empty($_SESSION["login"])) {
            echo '<a class="button is-dark" href="logout.php">Déconnexion</a>';
          } else {
            echo '<a class="button is-primary" href="register.php">Inscription</a>';
            echo '<a class="button is-light" href="login.php">Connexion</a>';
          }
          if (!empty($_SESSION["login"])) {
            if (($_SESSION['role'] == "admin") || !($_SESSION['role']) == "prof") {
              echo '<a class="button is-danger" href="panel.php">Panel</a>';
            }
          }
          ?>
        </div>
      </div>
    </nav>
  </nav>
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {

      const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

      if ($navbarBurgers.length > 0) {

        $navbarBurgers.forEach(el => {
          el.addEventListener('click', () => {

            const target = el.dataset.target;
            const $target = document.getElementById(target);

            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');

          });
        });
      }
    });
  </script>
</header>