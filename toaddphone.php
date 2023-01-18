<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['amount'])){

            require_once "db.php";       

            addPhone($_POST['name'], $_POST['price'], $_POST['amount']);
        }
        
    }

    header("Location:profile.php");

?>