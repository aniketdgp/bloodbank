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
        <?php require_once './assets/components/default/navbar_default_login.php';?>
          <!--NAVBAR END-->
        
          
          <div id="home" class="home">
              
              <center>
                  
                  <p class="login_text">Login</p>
                  <img class="login_icon" src="./assets/img/user.webp">
                  
                  <div id='form'class="login-form">
            
                      <form method="post"  action="./db/login_user.php">

           
                <div class="form-group">
                 <input type="text" class="form-control" placeholder="Email ID" id="email" name="email" required>
                </div>
           
     
                <div  class="form-group">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                </div>
                
                <select class="form-control register_form" id="usertype" name="usertype">
                <option value="hospital">Hospital</option>
                <option value="receiver">Receiver</option>
               </select>    
        
                     
                 <div class="form-group login_btn">
                     <button type="submit" class="btn btn-danger">Log In</button>

                 </div>
                
                    
                     </form>
                    
                  </div>
                
              </center>   
              
          </div>

       

    </body>


    
<?php require_once './assets/components/footer.php';?>




</html>
