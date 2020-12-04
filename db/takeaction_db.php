<?php

 require 'db_con.php';
 
 //Get Hospital Name from Session email
  session_start();
  $email = $_SESSION['email'];
  $receiveremail = $_SESSION['useremailt'];
  $bloodgroup = $_SESSION['tabg'];
  
  //get the status
  $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS);
  
  
  if($status=='accept'){
  
  //get Blood AVailable blood count    
  $v1 = "SELECT * from addblood WHERE email='$email' and bloodgroup='$bloodgroup'";
  $v1_query_result=mysqli_query($con,$v1)or die(mysqli_error($con));
  $v1op= mysqli_fetch_array($v1_query_result);
  $available_blood=$v1op['bc'];
  
  //get Blood count requested
  $v2 = "SELECT * from requestblood WHERE receiveremail='$receiveremail' and bloodgroup='$bloodgroup'";
  $v2_query_result=mysqli_query($con,$v2)or die(mysqli_error($con));
  $v2op= mysqli_fetch_array($v2_query_result);
  $requested_blood=$v2op['bc'];
  

  $value = $available_blood-$requested_blood;
  if($value>=0){
      $response_message = "Request Approved & Supplies Updated";
      $uv = $available_blood-$requested_blood;
      $uv_query="update addblood set bc = '$uv' where bloodgroup = '$bloodgroup'";
      $uv_submit = mysqli_query($con, $uv_query) or die(mysqli_error($con));
      //deleterequest
      $delete = "DELETE FROM requestblood WHERE receiveremail='$receiveremail'";
      $delete_query=mysqli_query($con,$delete)or die(mysqli_error($con));
      header('refresh:10;url=../viewrequest.php');
      
  }else{
      //deleterequest
      $delete = "DELETE FROM requestblood WHERE receiveremail='$receiveremail'";
      $delete_query=mysqli_query($con,$delete)or die(mysqli_error($con));
      $response_message = "We dont have Supplies";
  }
 
  }else{
      //deleterequest
      $delete = "DELETE FROM requestblood WHERE receiveremail='$receiveremail'";
      $delete_query=mysqli_query($con,$delete)or die(mysqli_error($con));
      $response_message = "You Rejected the Request";
  }
  
  
  
  
 

  
  
 ?>



<!-- HTML PAGE FOR Register data -->

<style>
    .signupdata{
        padding: 50px;
        margin-top: 100px;
    }
</style>



<!DOCTYPE html>
<html>
<head>
 <title>Blood Bank</title>
 <link rel="icon" href="./../assets/img/icon.png" type="image/x-icon">
 <link rel="stylesheet" href="../css/bootstrap.css" >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
</head>

<body>
   
    
    
    <div class="signupdata">
        
       
         <center>
         <br>
         <br>
         <h2><?php echo $response_message; ?></h2>
         
         <br>
         <br>
         <a href="../viewrequest.php" class="btn btn-danger btn-outline">Return</a>    
         </center>

    </div>   
   
    
    
    
    
    
</body>

</html>



