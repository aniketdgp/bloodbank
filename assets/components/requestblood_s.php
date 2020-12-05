<?php


  $emailhospital = filter_input(INPUT_POST, 'emailhospital', FILTER_SANITIZE_SPECIAL_CHARS);
  $bloodgroup = filter_input(INPUT_POST, 'bloodgroup', FILTER_SANITIZE_SPECIAL_CHARS);
 

?>


 <head>
    <title>Blood Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <!-- Bootstrap CSS -->
    
    <link type="text/css" rel="stylesheet" href="../../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../../css/styles.css">
    
   
   
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
   
    <link rel="icon" href="../../assets/img/icon.png" type="image/gif" sizes="16x16">
</head>

    <!--NAVBAR START-->
        <?php 
        
        require_once '../../assets/components/receiver/navbar_receiver_submit.php';
   
        ?>
          <!--NAVBAR END-->



<body>

<center>
<div class="formself">

    
    <form method="post" class="form-control" action="../../db/requestblood_db.php">

        <h3 class="rbtxt">Request the Number of Bottles</h3>
        <div class="form-group">
            <input type="number" class="form-control register_form" placeholder="Bottle Count" id="bc" name="bc" required>
            <input type="hidden" name="emailhospital" id="emailhospital" value="<?php echo $emailhospital; ?>"/>
            <input type="hidden" name="bloodgroup" id="bloodgroup" value="<?php echo $bloodgroup; ?>"/>            
        </div>
           <button type="submit" class="btn btn-danger">Submit Request</button> 

</form>
    
</div>
</center>  

</body>




    
<?php require_once '../../assets/components/footer.php';?>



<style>
     .register_form{
        margin-bottom: 10px;
    }
    .modal-title{
        color: #ff7961;
    }
    
    .modal{
    position: fixed;
    top: 20%;
    }
    
    input{  
    text-align: center;
    }
    
  input:hover{
       box-shadow: 0 0 0 2px #ff7961;
    }
    
     
    
    /*Mobiles*/
    @media only screen and (max-width: 600px) {
        .formself{
        margin-top: 200px;
        width: 70%;
    }
    
    .rbtxt{
        margin-bottom: 50px;
    }
    
    .btn{
        margin-top: 30px;
    }
        
    }
    
    /*Desktops*/
    @media only screen and (min-width: 601px) {
        
        .formself{
        margin-top: 200px;
        width: 30%;
    }
    
    .rbtxt{
        margin-bottom: 50px;
    }
    .btn{
        margin-top: 40px;
    }
        
    }
    
    
</style>
