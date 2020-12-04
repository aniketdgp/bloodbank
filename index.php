<?php
require_once './db/getusertype.php';
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
        
         
              if ($usertype == 'hospital') {
                    require_once './assets/components/hospital/navbar_hospital.php';
                                             } 
            else if($usertype == 'receiver') {
                    require_once './assets/components/receiver/navbar_receiver_index.php';
                    }
             else{
                  require_once './assets/components/default/navbar_default_index.php';
             }       
     
        
            ?>
        
            ?>
          <!--NAVBAR END-->
        
          
          <div id="home" class="home">
              
              <center>
                  
              <?php 
               if (isset($_SESSION['email'])) {
                    require_once './assets/components/hospital/hospital_index_body.php';
               } else {
                   require_once './assets/components/default/default_index_body.php';
               }
              
               
              
              
              ?>
   
                  
              </center>
           
              
          </div>

       

    </body>


    
<?php require_once './assets/components/footer.php';?>


</html>

 <script src="js/typer.js"></script>