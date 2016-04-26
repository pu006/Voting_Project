<?php
session_start();
session_destroy();

header("location: login-formularn.html");
?>