<!--Beginn stella code-->

<?php

#Userdaten einbinden
require_once "MySQL_access.php";

#PDO erstellen
$pdo = new PDO($dsn, $dbuser, $dbpass);

#Daten aus $_POST holen
$name= $_POST["name"];

#SQL_Anfrage zusammenstellen
$sql= "INSERT INTO `vs_lectureview` ('Meine Vorlesung')";

"VALUES ('$name')";


#Datenbankabfrage versuchen

try {
    $query= $pdo->prepare($sql);

    $query->execute();


} catch (Exception $e) {
    die ("Upps, ein Fehler ist aufgetreten. Bitte überprüfen Sie Ihre Angaben.");
}
?>

<br>
<a href="prof_uebersicht.php"> Zurück zur Vorlesungsübersicht</a>

<!--Ende stella code-->
