<?php

 require 'db_con.php';
 
 //Get Hospital Name from Session email
  session_start();

  $email = $_SESSION['email'];
  $result = "SELECT * from hospital WHERE email='$email'";
  $select_query_result=mysqli_query($con,$result)or die(mysqli_error($con));
  $row= mysqli_fetch_array($select_query_result);
  $hospitalname=$row['hospitalname'];
  
  //user input
  $bloodgroup = filter_input(INPUT_POST, 'bloodgroup', FILTER_SANITIZE_SPECIAL_CHARS);
  $bc = filter_input(INPUT_POST, 'bc', FILTER_SANITIZE_SPECIAL_CHARS);
  $doi = filter_input(INPUT_POST, 'doi', FILTER_SANITIZE_SPECIAL_CHARS);
  
  //query to bloodcount and update 
  $result1 = "select * from addblood where email = '$email' and bloodgroup = '$bloodgroup'";
  $select_query_result1=mysqli_query($con,$result1)or die(mysqli_error($con));
  $row1= mysqli_fetch_array($select_query_result1);
  $bloodcount=$row1['bc'];
    
  

  
  if(isset($bloodcount)){
      $updatebloodcount = $bloodcount+$bc;
      $user_registration_query="update addblood set bc = '$updatebloodcount' where bloodgroup = '$bloodgroup' and email='$email'";
      $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
      header('refresh:10;url=../addblood.php');
      
  }else{
      $updatebloodcount = 0+$bc;
      $user_registration_query="insert into addblood(hospitalname,bloodgroup,bc,doi,email)values ('$hospitalname','$bloodgroup','$bc','$doi','$email')";
      $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
      header('refresh:10;url=../addblood.php');
 
  }

  

 // $password_encrypted= md5($password);
  
  
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
         <h2>Blood Supplies Added to Blood Bank</h2>
         <a href="../addblood.php" class="btn btn-danger btn-outline">Return</a>    
         </center>

    </div>   
   
    
    
    
    
    
</body>

</html>



