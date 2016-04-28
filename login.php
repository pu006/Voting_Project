<?php
/**
 * Created by PhpStorm.
 * User: PIU
 * Date: 24.04.2016
 * Time: 22:18
 */
# Datenbank aus der Datei MySQL_access.php
#begin piu code

require_once "CRUD/MySQL_tst_connection.php";

#$pdo = new PDO($dsn, $dbuser, $dbpass);

$password = $_GET ['password'];
echo $password;
$email = $_GET ['email'];
echo $email;



#end piu code