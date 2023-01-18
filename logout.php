<?php 

    require_once "user.php";

    session_destroy();

    header("Location:login.php")
?>
