<?php

    $redirect = "profile.php";

    if($_SERVER['REQUEST_METHOD']=== 'POST'){

        if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['amount'])){

            require_once "db.php";
           
            $phone =  DetailsPhone($_POST['id']);
            if($phone!=null){

                UpdatePhone($_POST['id'],$_POST['name'],$_POST['price'],$_POST['amount']);
                $redirect = "details.php?id=".$_POST['id']."&success";
            }

        }
        
    }

    header("Location:$redirect");

?>