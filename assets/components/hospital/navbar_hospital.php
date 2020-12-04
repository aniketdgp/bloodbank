<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    
            <img class= "nav-img" src="assets/img/icon.png">
            <a class="navbar-brand" href="./index.php"><p class="navtext">Blood Bank | <?php echo $_SESSION['email'];?></p> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./addblood.php">Add Blood</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./viewrequest.php">View Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./bloodavailability.php">Blood Availability</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="./db/logout.php">Logout</a>
                </li>

              </ul>
             
            </div>
            
</nav>