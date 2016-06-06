<?php include("Include/head_.php"); ?>
<!DOCTYPE html>
<html>

<?php include("Include/navbar_index.php"); ?>

<body style="background-image: url(img/tablet-1250410_1280.jpg)">

<div class="container">
    <div class="row">

        <form class="form-horizontal" role="form" action="login_do.php" method="post">
            <h2 class="form-signin-heading">Welcome to XXXX, Please sign in and let your students vote!</h2>
            <div class="row">
                <label for="inputEmail" class="sr-only">Email address</label>
            </div>
            <br>
            <div class="col-md-4 col-md-offset-4">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                </br>
            </div>
    </div>
    <div class="row">
        <label for="inputPassword" class="sr-only">Password</label>
    </div>
    <br>
    <div class="col-md-4 col-md-offset-4">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </br>
    </div>

    <div class="col-md-4 col-md-offset-4">

        <button class="btn btn-success btn-lg btn-block" type="submit">Sign in</button>

    </div>
</div>

</form>

</div> <!-- /container -->






<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
