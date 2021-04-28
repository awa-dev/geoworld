<?php
session_start();
/**
 * PAGE PANEL
 *
 * PHP version 7
 *
 * @category  PANEL
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
require_once 'header.php';
?>

<?php
require_once './inc/manager-db.php';
$data = getData();
?>

<body>
    <div class="columns is-mobile is-centered">
        <div class="column is-half box">
            <table class="table">
                <thead>
                    <tr>
                        <th><abbr title="id">ID :</abbr></th>
                        <th><abbr title="login">LOGIN :</abbr></th>
                        <th><abbr title="password">PASSWORD :</abbr></th>
                        <th><abbr title="password">ROLE :</abbr></th>
                        <th><abbr title="password">UPDATE :</abbr></th>
                        <th><abbr title="password">ADD :</abbr></th>
                        <th><abbr title="password">DELETE :</abbr></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $key) {
                            echo "<tr><td>". $key->id ."</td>";
                            echo "<td>". $key->login ."</td>";
                            echo "<td>". $key->password ."</td>";
                            echo "<td>". $key->role ."</td>";
                            echo "<td><a href='panel-form.php?action=update.php'>UPDATE</a></td>";
                            echo "<td><a href='panel-form.php?action=register_admin.php'>ADD</a></td>";
                            echo "<td><a href='panel-form.php?action=delete.php'>DELETE</a></td><tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

<?php
require_once 'footer.php';
?>