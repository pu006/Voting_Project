<!--Beginn Stella Code-->


<?php

#Userdaten einbinden
require_once "MySQL_access.php";

#PDO erstellen
$pdo = new PDO($dsn, $dbuser, $dbpass);

#Primärschlüssel aus GET holen
$id= $_GET ["id"];

#SQL_query erstellen
$sql= "DELETE FROM `vs_lectureview` WHERE `id` ='$id'";

#Datenbankabfrage versuchen

try {
    $query= $pdo->prepare($sql);

    if ($query->execute()) {
        echo "Der Datensatz wurd erfolgreich entfernt.";
    }

} catch (PDOException $e) {
    die ("Upps, ein Fehler ist aufgetreten. Bitte überprüfen Sie Ihre Eingaben.");
}

?>

<br>
<a href="prof_uebersicht.php">Zurück zur Vorlesungsübersicht></a>


<!-- Ende Stella Code-->