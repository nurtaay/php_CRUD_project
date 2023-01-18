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
        <div class="container" style="min-height:500px;">
            <div class="row">
                <div class="col-6 mx-auto">
                    <form action="toaddphone.php" method="post" enctype="multipart/form-data">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="text" class="form-control" name="name" required placeholder="Insert name">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Price</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="number" class="form-control" name="price" required placeholder="Insert price">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Amount</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="number" class="form-control" name="amount" required placeholder="Insert amount">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button class="btn btn-success">Add Phone</button>
                            </div>
                        </div>
                    </form>
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