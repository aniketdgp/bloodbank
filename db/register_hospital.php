<?php

 require 'db_con.php';
 
  $hospitalname = filter_input(INPUT_POST, 'hospitalname', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
  $hospitaltype = filter_input(INPUT_POST, 'hospitaltype', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
 




 // $password_encrypted= md5($password);
  
  $user_registration_query="insert into hospital(hospitalname,email,hospitaltype,password)values ('$hospitalname','$email','$hospitaltype','$password')";
  $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
  

    header('refresh:5;url=../login.php');
 
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
         <h3>Use Your email and password to login</h3>
         <h4>Thanks for signing up</h4>
         <br>
         <br>
         <a href="../login.php" class="btn btn-danger btn-outline">Login</a>    
         </center>

    </div>   
   
    
    
    
    
    
</body>

</html>




