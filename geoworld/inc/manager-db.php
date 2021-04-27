<?php
/**
 * PAGE FUNCTION
 *
 * PHP version 7
 *
 * @category  Database_Access_Function
 * @package   Application
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>
<?php
require_once 'connect-db.php';

/**
 * Allows you to obtain the list of all the referenced countries of a given continent
 * @param 'string' $continent the name of a continent
 * @return 'array' object table (of countries)
 */
function getCountriesByContinent($continent)
{
    global $pdo;
    $query = 'SELECT * FROM Country WHERE Continent = :cont;';
    $prep = $pdo->prepare($query);
 
    $prep->bindValue(':cont', $continent, PDO::PARAM_STR);
    $prep->execute();

    return $prep->fetchAll();
}

/**
 * Get the list of countries
 * @return 'array' List of objects
 */
function getAllCountries()
{
    global $pdo;
    $query = 'SELECT * FROM Country;';
    return $pdo->query($query)->fetchAll();
}

/**
 * Get the list of names of getContinents
 * @return 'array' of objects stdClass with one attribute Continent
 */
function getContinents()
{
    global $pdo;
    $query = 'SELECT  distinct Continent FROM Country;';
    return $pdo->query($query)->fetchAll();
}
?>