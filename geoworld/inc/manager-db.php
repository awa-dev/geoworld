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

/**
 * Gives the identifiers
 * @return 'array'
 */
function getAuthentification($login, $password)
{
    global $pdo;
    $query = "SELECT login, password, role FROM Utilisateurs where login=:login and password=:password";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':login', $login);
    $prep->bindValue(':password', $password);
    $prep->execute();
    if ($prep->rowCount() == 1) {
        $result = $prep->fetch();
        return $result;
    } else
        return false;
}

/**
 * Allows you to add a user
 * @return
 */
function addAuthentification($login, $password)
{
    global $pdo;
    $query = "INSERT INTO Utilisateurs (login, password) VALUES (:login, :password)";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':login', $login);
    $prep->bindValue(':password', $password);
    $prep->execute();
    return true;
}

/**
 * Allows you to add a user (for admin)
 * @return
 */
function addAuthentificationAdmin($login, $password, $role)
{
    global $pdo;
    $query = "INSERT INTO Utilisateurs (login, password, role) VALUES (:login, :password, :role)";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':login', $login);
    $prep->bindValue(':password', $password);
    $prep->bindValue(':role', $role);
    $prep->execute();
    return true;
}

/**
 * Allows you to change the password of a user
 * @return
 */
function modifPassword($login,$password)
{
    global $pdo;
    $query = "UPDATE Utilisateurs SET password=:password WHERE login=:login";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':login', $login);
    $prep->bindValue(':password', $password);
    $prep->execute();
    return true;
}


/**
 * Allows you to delete a user
 * @return
 */
function deleteUser($login)
{
    global $pdo;
    $query = "DELETE FROM Utilisateurs WHERE login=:login";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':login', $login);
    $prep->execute();
    return true;
}

/**
 * Gives the information about the user table
 * @return
 */
function getData()
{
    global $pdo;
    $query = "SELECT * FROM Utilisateurs";
    return $pdo->query($query)->fetchAll();
}
?>