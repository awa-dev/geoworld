<?php
session_start();
/**
 * PAGE LOGOUT
 *
 * PHP version 7
 *
 * @category  INDEX
 * @package   Application
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>

<?php
session_destroy();
echo '<script type="text/javascript">
location.replace("index.php");
</script>';
?>

