<?php
session_start();
/**
 * PAGE DELETE
 *
 * PHP version 7
 *
 * @category  DELETE
 * @package   Application
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>
<?php
if (!($_SESSION['role'] == "admin")) {
    echo '<script type="text/javascript">
    location.replace("index.php");
    </script>';
}
?>

<?php
require_once './inc/manager-db.php';
?>

<?php
if (isset($_POST['login']) && !empty($_POST['login'])) {
  $result = deleteUser($_POST['login']);
    echo '<script type="text/javascript">
    location.replace("index.php");
    </script>';
}
?>