<?php include("Include/head.php."); ?>

<?php include("Include/navbar_index.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <h3>Meine Vorlesungsübersicht</h3>
    </div>
    <div class="row">
        <p>
            <a href="prof_create_form.php." class="btn btn-success">Neu</a>
        </p>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Meine Vorlesung</th>
                <th>Aktion</th>
            </tr>
            </thead>
            <tbody>

            <?php
            include ('MySQL_access.php');

            $pdo = new PDO($dsn, $dbuser, $dbpass);

            $sql = "SELECT *FROM vs_lectureview";



            #Statement vorbereiten
            $query = $pdo->prepare($sql);

            #Query ausführen
            $query->execute();

            foreach ($pdo->query($sql) as $row) {
                echo '<tr>';
                echo '<td>'. $row['Meine Vorlesung'] . '</td>';
                echo '<td>'. $row['Aktion'] . '</td>';
                echo '<td><a class="btn" href="prof_read.php?id='.$row['id'].'">Anzeigen</a></td>';
                echo '<td width=250>';

                #wieso zeigt er die Buttons nicht ?????
                echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                echo ' ';
                echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
                echo ' ';
                echo '<a class="btn btn-danger" href="prof_delete.php?id='.$row['id'].'">Delete</a>';
                echo '</td>';


                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div> <!-- /container -->
</body>
</html>