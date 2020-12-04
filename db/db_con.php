<?php

$host="localhost";
$user="root";
$password="";
$database="bloodbank";


$con= mysqli_connect($host, $user, $password, $database)or die(mysqli_error($con));

/*
   $select_query="SELECT * FROM signup_form";
   $select_query_result=mysqli_query($con,$select_query)or die(mysqli_errno($con));
       
*/
?>