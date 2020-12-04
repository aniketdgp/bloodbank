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
                    require_once './assets/components/hospital/navbar_hospital_bloodavailability.php';
                                             } 
            else if($usertype == 'receiver') {
                    require_once './assets/components/receiver/navbar_receiver_bloodavailability.php';
                    }
             else{
                  require_once './assets/components/default/navbar_default_bloodavailability.php';
             }       
     
        
            ?>
          <!--NAVBAR END-->
        
          
          <div id="home" class="home">
              
              <center>
                  
                <div id='form'class="login-form">     
               <p class="selectblood_text">Search by Blood Group</p>  
               <form method="post"  action="./ba_data.php">

                   
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
                               
                 <div class="form-group search_btn">
                     <button type="submit" class="btn btn-danger">Search</button>

                 </div>
                
                    
              </form> 
                </div>
                 
                  
               
           
              
              
                  
              </center>
           
              
          </div>

       

    </body>


    
<?php require_once './assets/components/footer.php';?>




</html>
