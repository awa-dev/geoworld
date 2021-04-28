<?php
session_start();
/**
 * PAGE UPDATE
 *
 * PHP version 7
 *
 * @category  UPDATE
 * @package   Application
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>
<?php
if (!($_SESSION['role'] == "admin") || !($_SESSION['role']) == "prof") {
    echo '<script type="text/javascript">
    location.replace("index.php");
    </script>';
}
?>

<?php
require_once './inc/manager-db.php';
?>

<?php
if (isset($_POST['login']) && isset($_POST['password']) && !empty($_POST['login']) && !empty($_POST['password'])) {
  $result = modifPassword($_POST['login'], $_POST['password']);
    echo '<script type="text/javascript">
    location.replace("index.php");
    </script>';
}
?>