<?php
	require_once "user.php";
    if($ONLINE){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            require_once "head.php";
        ?>
    </head>
    <body>
            <?php
                require_once "navbar.php";
            ?>
        <div class="container mt-3">
                <h1 class="text-center">HELLO <?php echo $_SESSION['NOW_USER']['fullname'];?></h1>
        </div>
        <div class="container-fluid" style="min-height:500px;">
            <div class="row">
                <div class="col-12">
                <table class="table table-striped">
                          <thead>
                              <tr>
                                  <td>ID</td>
                                  <td>NAME</td>
                                  <td>PRICE</td>
                                  <td>AMOUNT</td>
                                  <td>DETAILS</td>
                              </tr>
                              <tbody>
                                      <?php
                                            $tasks = getTask();
                                            if($tasks!=null){
                                            foreach($tasks as $ts){
                                        ?>
                                            <tr>
                                                <td><?php echo $ts['id']; ?></td>
                                                <td><?php echo $ts['name']; ?></td>
                                                <td><?php echo $ts['price']; ?></td>
                                                <td><?php echo $ts['amount']; ?></td>
                                                <td><a href="details.php?id=<?php echo $ts['id'];?>" class="btn btn-primary">DETAILS</a></td>
                                            </tr>
                                         <?php      
                                           } 
                                        }
                                      ?>
                                  </tr>
                              </tbody>
                          </thead>
                      </table>
                    
                </div>
            </div>
        </div>
        <?php
            include_once "footer.php";
        ?>
    </body>
</html>
<?php
    }else{
        header("Location:login.php");
    }
?>