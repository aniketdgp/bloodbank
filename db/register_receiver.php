<?php

 require 'db_con.php';
 
  $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
  $bloodgroup = filter_input(INPUT_POST, 'bloodgroup', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
 
   $result = "SELECT * from receiver WHERE email='$email'";
   $select_query_result=mysqli_query($con,$result)or die(mysqli_error($con));
   $row= mysqli_fetch_array($select_query_result);
   $email_data=$row['email'];



   $password_encrypted= md5($password);
   
   if(isset($email_data)){
         $responsem = "Email ID Already Registerd";
         header('refresh:5;url=../Register.php');
   }else{
        $user_registration_query="insert into receiver(fullname,email,bloodgroup,passwordt)values ('$fullname','$email','$bloodgroup','$password_encrypted')";
        $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
        $responsem = "Use Your email and password to login";
       header('refresh:5;url=../login.php');
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
         <h3><?php echo $responsem ?></h3>
         <?php  if(!isset($email_data)){?>
         <h4>Thanks for signing up</h4>
         <br>
         <br>
         <a href="../login.php" class="btn btn-danger btn-outline">Login</a>
         <?php } ?>
         </center>

    </div>   
   
    
    
    
    
    
</body>

</html>




