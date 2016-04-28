<?php
/**
 * Created by PhpStorm.
 * User: PIU
 * Date: 24.04.2016
 * Time: 22:18
 */
# Datenbank aus der Datei MySQL_access.php
#begin PIU Code
require_once "CRUD/MySQL_access.php";
$pdo = new PDO($dsn, $dbuser, $dbpass);

