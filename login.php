<?php
/**
    * Fragment Header HTML page
 *
 * PHP version 7
 *
 * @category  Page_Fragment
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */
?>
<?php  require_once 'header.php';
?>

<main role="main" class="flex-shrink-0">
        <h1> Formulaire de connection </h1>
        <form action="session.php" method="post">
            <table>
                <tr>
                    <td>Identifiant:</td>
                    <td> <input type="text" name="login"> </td>
                </tr>
                <tr>
                    <td>Mot de passe:</td>
                    <td> <input type="password" name="pwd"> </td>
                </tr>
                <tr>
                    <td>Envoyer</td>
                    <td> <input type="submit" name="env"</td>
                </tr>
            </table>
        </form>
</main>


<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
