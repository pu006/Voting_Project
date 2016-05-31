<?php
/**
 * Created by PhpStorm.
 * User: stella
 */


require_once "CRUD/MySQL_access.php";
$pdo = new PDO($dsn, $dbuser, $dbpass);


#Beginn Stella Code

$sql = "SELECT * FROM vs_eintrag_fragen";

$query = $pdo->prepare($sql);

$query->execute();


echo "<table>  <tr> <th>id<th>  <th>Frage</th> </tr>";

while ($zeile= $query->fetchObject()) {
    echo "<tr>";

    echo "<td> $zeile->id</td>";
    echo "<td> $zeile->Frage</td>";
    echo "</td>";

}

echo "</table>";

#End Stella Code
