<?php
session_start();
/**
 * PAGE REGISTER_ADMIN
 *
 * PHP version 7
 *
 * @category  REGISTER_ADMIN
 * @package   Application
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>

if (!($_SESSION['role'] == "admin") {
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
  $result = addAuthentificationAdmin($_POST['login'], $_POST['password'], $_POST['role']);
    echo '<script type="text/javascript">location.replace("index.php");</script>';
}
?>