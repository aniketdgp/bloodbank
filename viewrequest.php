<?php
require_once './db/getusertype.php';
require './db/db_con.php'; 
$val = $_SESSION['email'];
if (!($usertype=="hospital")) {
    echo '<script>
                alert("You need to login as Hospital");
                window.location.href="./login.php";
          </script>'  ;  
}

$select_query="SELECT * FROM requestblood where emailhospital='$val'";
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
     
             if (isset($usertype)) {
                    require_once './assets/components/hospital/navbar_hospital_viewrequest.php';
             } 
             
             
 
        ?>
          <!--NAVBAR END-->

    <body>

  <div class="data_ba">

     <center>
         

         
         
        <div class="container">
        
            
        <!--Table Not For Hospital-->
        <table class="table table-striped table-bordered  ">
    <thead>
      <tr>
        <th>Blood Group</th>  
        <th>Bottle Count</th>
        <th>Requester Email</th>
        <th>Accept/Reject</th>
      </tr>
    </thead>
    <tbody>
       <?php
        while ($row= mysqli_fetch_array($select_query_result)){
        ?>
        
      <tr>
          
            <?php require_once './assets/components/TakeAction.php';?>
        
          <td><p class="text"><?php echo $row['bloodgroup']?></p></td>      
          <td><p class="text"><?php echo $row['bc']?></p></td>
          <td><p class="text"><?php echo $row['receiveremail']?></p></td>
          <td> 
    
               <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#takeaction">
              <p class="text">
                      Take Action 
                      <?php 
                      $_SESSION['useremailt']=$row['receiveremail'];
                      $_SESSION['bgn']=$row['receiveremail'];
                      $_SESSION['tabg']=$row['bloodgroup'];
                      ?>
              </p>
              </button>  
             
          </td>
      </tr>
      
      <?php
        }
        ?>
    </tbody>
  </table>
        
        
        </div>
         
           </center>
        
        
        <div class="padding"></div>
        
       
 </div> 
     
     <!--Content Section End-->   
     
     
     <style>
         
         /*Desktops*/
         @media only screen and (min-width: 601px) {
             
         .data_ba{
             margin-top: 150px;
             margin-bottom: 80px;
             
         }
         
         .btn{
             height: 40px;
             width: 140px;
         }
         
       
             
         }
         
         /*Mobiles*/
        @media only screen and (max-width: 600px) {
            
         .data_ba{
             margin-top: 100px;
             margin-bottom: 60px;
              max-width: 100vh;
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