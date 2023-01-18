<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #172569;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="profile.php">Home</a>
        </li>
        <?php
            if($ONLINE){
        ?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php
                      echo $_SESSION['NOW_USER']['fullname'];
                  ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="addphone.php">Add</a></li>
                  <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                </ul>
              </li>
             <li class="nav-item">
                <a class="nav-link"></a>
              </li>
              <form action="search.php" method="get" class="d-flex" style="margin-left:950px;">
                <input required class="form-control me-2" name="search" type="search" placeholder="Search phone" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];} ?>">
                <button class="btn btn-primary">Search</button>
             </form>
        <?php
          }else{
         ?>
             <li class="nav-item">
                <a class="nav-link" href="login.php">Sign In</a>
              </li>
         <?php   
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
</div>