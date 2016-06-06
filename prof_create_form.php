<!--Beginn stella code-->

<?php include("inc/session_check.php"); ?>  <!--session_check noch erstellen-->

<!DOCTYPE html>
<html>

<?php include("Include/head.php."); ?>

<body>

<?php include("Include/navbar_index.php."); ?>

<div class="container">

    <!-- Beginn Formular der Neu Anlage-->
    <h3>Neue Vorlesung anlegen</h3>

    <form action="prof_create_do.php" method="post">
        Vorlesung:<br>
        <input type="text" name="vorlesung" /><br>
        <div class="form-group"><br>
            <button
                type="submit"
                class="btn btn-primary btn-sm">
                Hinzufügen
            </button>
        </div>
    </form>
</div>
</body>
</html>


<!--Ende stella code-->