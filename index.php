<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php
require_once 'header.php'; ?>

<?php
require_once 'inc/manager-db.php';
require_once 'carte.php';

$continent ="Asia";
if(!empty($_GET['continent'])){ /** empty= si sa été donné */
    $continent=$_GET['continent'];
} /* */

$desPays = getCountriesByContinent($continent);
?>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
