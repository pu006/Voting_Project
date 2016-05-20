<?php
/**
 * Created by PhpStorm.
 * User: PIU
 * Date: 24.04.2016
 * Time: 22:18
 */

#begin piu code
# Datenbankzugang aus der Datei MySQL_access.php
require_once "CRUD/MySQL_access.php";

$pdo = new PDO($dsn, $dbuser, $dbpass);
session_start();
/*$password = $_POST ['password'];
#echo $password;
$email = $_POST ['email'];
#echo $email;*/

if (isset($_POST['email']))#Passwort Email von der Formular in Variable $email einfuegen
    {
        $email = $_POST['email'];
        if ($email == '') #Falls email-Feld ist leer, Variable $email loeschen
            {
                unset($email);
            }
    }
 #заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную

if (isset($_POST['password'])) #Passwort von der Formular in Variable $password einfuegen
    {
    $password=$_POST['password']; #Falls Passwort-Feld ist leer, Variable $password loeschen
        if ($password =='')
        {
            unset($password);
        }
    }

if (empty($email) or empty($password)) #Falls  E-mail oder Passwort nicht eingegeben werden, dann eine Meldung anzeigen und noch mal versuchen.
{
    echo '<meta http-equiv=refresh content="0; url=login_form_empty_feeld.html">';
}




#end piu code