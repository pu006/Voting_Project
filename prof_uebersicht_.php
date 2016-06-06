<!--Beginn stella code-->

<?php include("Include/head.php"); ?>

<body>

<?php include("Include/navbar_index.php"); ?>


<?php
#Userdaten einbinden
require_once "MySQL_access.php";

#PDO erstellen
$pdo = new PDO($dsn, $dbuser, $dbpass);

$sql = "SELECT *FROM `vs_lectureview`";

#Statement vorbereiten
$query = $pdo->prepare($sql);

#Query ausführen
$query->execute();

#Tabelle eröffnen und dann befüllen
echo "<table>  <tr> <th>id<th>  <th>Meine Vorlesung</th> </tr>";

#Solange Ergebnisobjekte vorhanden sind, diese in $zeile ablegen, dann eine neue Tabellenzeile ausgeben
while ($zeile= $query->fetchObject()) {
    echo "<tr>";

    echo "<td> $zeile->id</td>";
    echo "<td> $zeile->Meine Vorlesung</td>";

    #Link zum Loeschen einer Vorlesung
    echo "<td> <a href='prof_delete.php?id=$zeile->id'>Löschen</a></td>";
    echo"</tr>";
}
echo "</table>";

#Link zur Neuanlage einer Vorlesung
echo "<p><a href='prof_create_form.php'>Neue Vorlesung hinzufügen</a></p>";

?>


<!--Ende stella code-->