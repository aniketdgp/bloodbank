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
        <?php require_once './assets/components/default/navbar_default_register.php';?>
          <!--NAVBAR END-->
        
          
          <div id="home" class="home">
              
              <center>
                  
              <p class="registeras_text">      
                 REGISTER AS
              </p>
             
              <?php 
              require_once './assets/components/Register_hospital.php';
               require_once './assets/components/Register_receiver.php';
              
              ?>
              
              <button type="button" class="btn btn-danger register_btn" data-toggle="modal" data-target="#RegisterHospital">Hospital</button>
               
              <button type="button" class="btn btn-danger register_btn " data-toggle="modal" data-target="#RegisterReceiver">Receiver</button>
              
              
              
              
              
                  
              </center>
           
              
          </div>

       

    </body>


    
<?php require_once './assets/components/footer.php';?>




</html>

