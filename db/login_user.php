<?php

//connection

 require 'db_con.php';
 
 //getting table data
  
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
  $usertype = filter_input(INPUT_POST, 'usertype', FILTER_SANITIZE_SPECIAL_CHARS);
 
 

 //getting data from database
  
  if($usertype == 'hospital'){
      $result = "SELECT * from hospital WHERE email='$email'";
  }else if($usertype == 'receiver'){
      $result = "SELECT * from receiver WHERE email='$email'";
  }
  
 
  
  $select_query_result=mysqli_query($con,$result)or die(mysqli_error($con));
  $row= mysqli_fetch_array($select_query_result);
  
  
   $email_data=$row['email'];
   $password_data= $row['password'];

  
  
 
  if($email==$email_data && $password==$password_data){
  // echo "welcome. ".$name_data;
     session_start();
  // Store Session Data
   $_SESSION['email']= $email_data; 
    header("location:../index.php");
   
  }else{
    $response_message = "Invalid Cedentials Check your Email Or Password";       
    
}


?>


<!-- HTML PAGE FOR Sign up data -->

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
         <h3><?php echo $response_message?></h3>
         <br>
         <br>
         <a href="../login.php" class="btn btn-danger btn-outline">Login Again</a>    
         </center>

    </div>   
   
    
    
    
    
    
</body>

</html>
  
  



  
  
  
  
  


   
   
   