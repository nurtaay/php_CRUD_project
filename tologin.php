<?php

    $redirect = "profile.php";
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(isset($_POST['email']) && isset($_POST['password'])){

            $redirect = "login.php?error";
            
            require_once "db.php";

            $user = getUser($_POST['email'], $_POST['password']);

            if($user!=null && $user['password'] === sha1($_POST['password'])){

                require_once "user.php";

                $_SESSION['NOW_USER'] = $user;
                $redirect = "profile.php";

            }
        
        }
 
    }

    header("Location:$redirect");

?>