
<?php


 session_start();   
 require 'db_con.php';
 $recevieremail = $_SESSION['email'];
 
  $checkemail_query = "SELECT * from requestblood WHERE receiveremail='$recevieremail'";
  $select_query_result=mysqli_query($con,$checkemail_query)or die(mysqli_error($con));
  $row= mysqli_fetch_array($select_query_result);
  $op=$row['receiveremail'];

  
  if(isset($op)){
      $message_response = "uhh! Looks Like You Already Have a Pending Request";
      header('refresh:4;url=../bloodavailability.php');
  }else{
  $bc = filter_input(INPUT_POST, 'bc', FILTER_SANITIZE_SPECIAL_CHARS);
  $bloodgroup = $_SESSION['bg'];
  $emailhospital = $_SESSION['hospitalemail'];
  $user_registration_query="insert into requestblood(bc,emailhospital,receiveremail,bloodgroup) values ('$bc','$emailhospital','$recevieremail','$bloodgroup')";
  $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
  header('refresh:4;url=../bloodavailability.php');
  $message_response = "Your Request Has been Submitted to Blood Bank";
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
         <h3><?php echo $message_response; ?></h3>
         <br>
         <br> 
         </center>

    </div>   
   
    
    
    
    
    
</body>

</html>




