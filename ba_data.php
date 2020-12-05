<?php 
        
          require './db/db_con.php'; 
          require_once './db/getusertype.php';
           
          $bloodgroup = filter_input(INPUT_POST, 'bloodgroup', FILTER_SANITIZE_SPECIAL_CHARS);
          $select_query="SELECT * FROM addblood where bloodgroup = '$bloodgroup'";
          $select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
          
              
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

 <!--NAVBAR START-->
        <?php 
        
         
             if ($usertype == 'hospital') {
                    require_once './assets/components/hospital/navbar_hospital_bloodavailability.php';
                                             } 
            else if($usertype == 'receiver') {
                    require_once './assets/components/receiver/navbar_receiver_bloodavailability.php';
                    }
             else{
                  require_once './assets/components/default/navbar_default_index.php';
             }       
     
        
            ?>
          <!--NAVBAR END-->

    <body>
        
 <div class="data_ba">

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
                     <button type="submit" class="btn btn-danger btnsearch">Search</button>

                 </div>
                
                    
              </form> 
                </div>
         
         
        <div class="container">
        
        <?php if($usertype != 'hospital'){ ?>    
        <!--Table Not For Hospital-->
        <table class="table table-striped table-bordered  ">
    <thead>
      <tr>
    
        <th>Hospital Name</th>
        <th>Bottle Count</th>
        <th>Request</th>
    
      </tr>
    </thead>
    <tbody>
        <?php
        while ($row= mysqli_fetch_array($select_query_result)){
        ?>
        
      <tr>
          
          <td><p class="text"><?php echo $row['hospitalname']; ?></p></td>
          <td><p class="text"><?php echo $row['bc']; ?></p></td>
          
         
          <td>
              
              <?php if($usertype == "receiver"){ ?>
              
            
              
              <form method="post" action="./assets/components/requestblood_s.php">
                  
                   <input type="hidden" name="emailhospital" id="emailhospital" value="<?php echo $row['email']; ?>"/>
                   <input type="hidden" name="bloodgroup" id="bloodgroup" value="<?php echo $row['bloodgroup']; ?>"/>
                   <button type="submit" class="btn btn-danger"> <p class="text">Request For <?php echo $row['bloodgroup'];?></p></button>
                  
              </form>    
            
              
              <?php }else{ ?>
              <button type="submit" class="btn btn-danger" onclick="signin()">
              <p class="text">
                      Request For <?php echo $row['bloodgroup']?>
              </p>
              </button>  
              <?php } ?>
          </td>
      </tr>
      
      <?php
        }
        ?>
    </tbody>
  </table>
        <?php
        }else{
            
        ?> 
        
     <!--Table For Hospital-->
        <table class="table table-striped table-bordered  ">
    <thead>
      <tr>
    
        <th>Hospital Name</th>
        <th>Bottles Count</th>
    
      </tr>
    </thead>
    <tbody>
        <?php
        while ($row= mysqli_fetch_array($select_query_result)){
        ?>
        
      <tr>
          <td><p class="text"><?php echo $row['hospitalname']?></p></td>
          <td><p class="text"><?php echo $row['bc']?></p></td>
      </tr>
      
      <?php
        }
        ?>
    </tbody>
  </table>
     
      <?php
        }
        ?>
        
        </div>
         
           </center>
        
        
        <div class="padding"></div>
        
       
 </div> 
     
     <!--Content Section End-->   
     
     
     <style>
         
         /*Desktops*/
         @media only screen and (min-width: 601px) {
          
         html{
           overflow: visible;
         }
         
         .data_ba{
             margin-top: 150px;
             padding-bottom: 80px;
             
         }
        
         
         .btn{
             height: 40px;
             width: 140px;
         }
         
       
             
         }
         
         /*Mobiles*/
        @media only screen and (max-width: 600px) {
        
         html{
           overflow: visible;
         }
         
         .btnsearch{
         padding:3px;
         }
            
         .data_ba{
             margin-top: 100px;
             padding-bottom: 80px;
             max-width: 100vh;
             
         }
         ::-webkit-scrollbar {
            width: 0px; 
            background: transparent;
         }
         .container{
             margin-left: 0px;
             margin-right: 0px;
         }
         
         .text{
             font-size: 10px;
         }
         .btn{
             height: 30px;
             width: 90px;
         }
            
        }
        

       
         
         
     </style> 
     
     
     

     
     
    </body>


    
<?php require_once './assets/components/footer.php';?>


<script>
function signin() {
  
                alert("You need to login First");
                window.location.href="./login.php";
}
</script>    
    
    
</html>



