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
                    <?php
                    
                        if(isset($_GET['id']) && is_numeric($_GET['id'])){

                            $phone = DetailsPhone($_GET['id']);
                            if($phone!=null){

                    ?>
                    <?php
                        if(isset($_GET['success'])){ 
                     ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Phone Saved successfully
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                     <?php       
                        }
                    ?>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <input type="text" class="form-control"  value=<?php echo $phone['name'];?> readonly>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Price</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <input type="number" class="form-control" value=<?php echo $phone['price'];?> readonly>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Amount</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <input type="number" class="form-control" value=<?php echo $phone['amount'];?> readonly>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <input type="text" class="form-control"  value=<?php echo $phone['name'];?> readonly>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Edit 
                                </button>
                                <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Delete
                            </button>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="save.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $phone ['id'];?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Phone</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                     <div class="row">
                                            <div class="col-12">
                                                <label>Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="name" require value="<?php echo $phone['name'];?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Price</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="number" class="form-control" name="price" require value="<?php echo $phone['price'];?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Amount</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="number" class="form-control" name="amount" require value="<?php echo $phone['amount'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-success">Save </button>
                                    </div>
                                </form>
                            </div>
                            </div>
                            </div>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $phone ['id'];?>">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Confirn Delete</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button  class="btn btn-danger">Delete</button>
                                </div>
                                </form>
                                </div>
                            </div>
                            </div>
                            <?php
                                 } 
                                }  
                            ?>
                        </div>
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