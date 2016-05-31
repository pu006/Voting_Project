<?php
/**
 * Created by PhpStorm.
 * User: PIU
 * Date: 24.04.2016
 * Time: 22:18
 */

#begin piu code hallo halli
# Datenbankzugang aus der Datei MySQL_access.php
require_once "CRUD/MySQL_access.php";
$pdo = new PDO($dsn, $dbuser, $dbpass);

#session_start();

if (isset($_POST['email']))#Passwort Email von der Formular in Variable $email einfuegen
{
    $email = $_POST['email'];
    if ($email == '') #Falls email-Feld ist leer, Variable $email loeschen
    {
        unset($email);
    }
}

if (isset($_POST['password'])) #Passwort von der Formular in Variable $password einfuegen
{
    $userPasFromFormular = $_POST['password']; #Falls Passwort-Feld ist leer, Variable $password loeschen
    if ($userPasFromFormular == '') {
        unset($userPasFromFormular);
    }
}
#Falls  E-mail oder Passwort nicht eingegeben werden, dann eine Meldung anzeigen und noch mal versuchen.
if (empty($email) or empty($userPasFromFormular)) 

{
    echo '<meta http-equiv=refresh content="0; url=login_form_empty_feeld.html">';
}

$sql = "SELECT * FROM vs_dozent WHERE Mail='$email'"; #Daten mit eingegebenem E-Mail aus DB rausholen
$query = $pdo->prepare($sql); #erzeugt Verbindung mit der DB
$query->execute();
$result = $query->fetchObject(); #DB-Satz in Variable $result eintragen
$userPasFromDB = $result->Passwort; #Passwort aus DB-Satz  in variable $userPasFromDB eintragen



if ($userPasFromDB == $userPasFromFormular) {   #Passwoerter vergleichen
    
} else {
    echo '<meta http-equiv=refresh content="0; url=login_form_wrong_password.html">';
}


/**if (empty($myrow['password'])) {
 * //если пользователя с введенным логином не существует
 * exit ("Извините, введённый вами login или пароль неверный.");
 * }
 * else {
 * //если существует, то сверяем пароли
 * if ($myrow['password']==$password) {
 * //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
 * $_SESSION['login']=$myrow['login'];
 * $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
 * echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
 * }
 * else {
 * //если пароли не сошлись
 *
 * exit ("Извините, введённый вами login или пароль неверный.");
 * }
 * }
 * */

#end piu code
?>


