    <?php

    $redirect = "profile.php";

    if($_SERVER['REQUEST_METHOD']=== 'POST'){

        if(isset($_POST['id'])){

            require_once "db.php";
           
            $phone =  DetailsPhone($_POST['id']);
            if($phone!=null){

                DeletePhone($_POST['id']);
            }

        }
        
    }

    header("Location:$redirect");

?>