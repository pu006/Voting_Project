<?php
/**
 * Created by PhpStorm.
 * User: PIU
 * Date: 24.04.2016
 * Time: 22:34
 */
#begin PIU Code
require_once "MySQL_access.php";

# DB verbindung testen.
try {
    $db = new PDO($dsn, $dbuser, $dbpass, array('charset' => 'utf8'));
} catch (PDOException $p) {
    echo("Fehler bei Aufbau der Datenbantverbindung.");
}
#/end PIU Code
?>