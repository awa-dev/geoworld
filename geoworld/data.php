<?php
session_start();
/**
 * PAGE DATA
 *
 * PHP version 7
 *
 * @category  DATA
 * @package   Application
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>
<?php
if (!($_SESSION['login'])) {
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
$continent = "asia";
if (!empty($_GET['continent'])) {
	$continent = $_GET['continent'];
};
$data_continent = getCountriesByContinent($continent);
?>

<body>
    <div class="container is-fluid">
        <div class="notification">
            <p class="title is-1 is-spaced"><?php echo $continent ?></p>
            <table class="table">
                <thead>
                    <tr>
                        <th><abbr title="id">Name</abbr></th>
                        <th><abbr title="region">Region</abbr></th>
                        <th><abbr title="SurfaceArea">SurfaceArea</abbr></th>
                        <th><abbr title="IndepYear">IndepYear</abbr></th>
                        <th><abbr title="Population">Population</abbr></th>
                        <th><abbr title="LifeExpectancy">LifeExpectancy</abbr></th>
                        <th><abbr title="GNP">GNP</abbr></th>
                        <th><abbr title="GNPOld">GNPOld</abbr></th>
                        <th><abbr title="LocalName">LocalName</abbr></th>
                        <th><abbr title="GovernmentForm">GovernmentForm</abbr></th>
                        <th><abbr title="HeadOfState">HeadOfState</abbr></th>
                        <th><abbr title="Capital">Capital</abbr></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data_continent as $key) {
                            echo "<tr><td>". $key->Name ."</td>";
                            echo "<td>". $key->Region ."</td>";
                            echo "<td>". $key->SurfaceArea ."</td>";
                            echo "<td>". $key->IndepYear ."</td>";
                            echo "<td>". $key->Population ."</td>";
                            echo "<td>". $key->LifeExpectancy ."</td>";
                            echo "<td>". $key->GNP ."</td>";
                            echo "<td>". $key->GNPOld ."</td>";
                            echo "<td>". $key->LocalName ."</td>";
                            echo "<td>". $key->GovernmentForm ."</td>";
                            echo "<td>". $key->HeadOfState ."</td>";
                            echo "<td>". $key->Capital ."</td><tr>";
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