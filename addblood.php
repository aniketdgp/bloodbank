<?php
require_once './db/getusertype.php';
if (!isset($_SESSION['email'])) {
    echo '<script>
                alert("You need to login First");
                window.location.href="./login.php";
          </script>'  ;  
}
?>

<html>
  <head>
    <title>Blood Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <!-- Bootstrap CSS -->
    
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/styles.css">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    <link rel="icon" href="assets/img/icon.png" type="image/gif" sizes="16x16">
</head>

    <body>

        <!--NAVBAR START-->
        
        <?php 
        
         
             if (isset($_SESSION['email'])) {
                    require_once './assets/components/hospital/navbar_hospital_addblood.php';
              } 
           
     
        
        ?>
          <!--NAVBAR END-->
        
          
          <div id="home" class="home">
              
              <center>
                  
                  
                  <p class="login_text">Login</p>
                  <img class="login_icon" src="./assets/img/icon.png">
                  
                  <div id='form'class="login-form">
            
                      <form method="post"  action="./db/addblood_data.php">

           
                <select class="form-control register_form form-group" id="bloodgroup" name="bloodgroup">
                <option value="A+">A+</option>
                <option value="O+">O+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                 <option value="A-">A-</option>
                <option value="O-">O-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
               </select>    
                    
                <div  class="form-group">
                <input type="text" class="form-control" placeholder="Number of Bottles" id="bc" name="bc" required>
                </div>
                    
                 <div  class="form-group">
                     <input type="date" class="form-control"  id="doi" name="doi" required>  
                 </div>   
                    
                              
                 <div class="form-group login_btn">
                     <button type="submit" class="btn btn-danger">Update</button>

                 </div>
                
                    
                     </form>
                    
                  </div>
                  
             
        
              
                  
              </center>
           
              
          </div>

       

    </body>


    
<?php require_once './assets/components/footer.php';?>




</html>

