<?php
require 'db_con.php';
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}else {
    $email = "default";
}

$result = "SELECT * from hospital WHERE email='$email'";
$select_query_result=mysqli_query($con,$result)or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);
$email_data=$row['email'];

$result1 = "SELECT * from receiver WHERE email='$email'";
$select_query_result1=mysqli_query($con,$result1)or die(mysqli_error($con));
$row1= mysqli_fetch_array($select_query_result1);
$email_data1=$row1['email'];

if(isset($email_data)){
    $usertype = "hospital";
}else if(isset ($email_data1)){
    $usertype = "receiver";
}else{
    $usertype = "default";
}

//$usertype = ;