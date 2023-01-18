<?php
	require_once "user.php";
?>
<!DOCTYPE html>
<html>
		<?php 
            require_once 'head.php'; 
        ?>  
	<body>
            <?php
				require_once 'navbar.php';
		    ?>
			<div class="container">
				<div class="row">
					<div class="col-6 mx-auto">
						<form action="tologin.php" method="post">
							<div class="row mt-3">
								<div class="col-12">
									<label>Email: </label>
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-12">
									<input type="email" name="email" class="form-control" placeholder="email">
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12">
									<label>PASSWORD: </label>
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-12">
									<input type="password" name="password" class="form-control" placeholder="Password">
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12">
									<button class="btn btn-success">SIGN IN</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
	</body>
</html>