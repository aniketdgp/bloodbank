<form method="post" action="./db/requestblood_db.php">
<div class="modal fade" id="requestBloodModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Request Blood</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        
        <div class="form-group">
            <input type="number" class="form-control register_form" placeholder="Bottle Count" id="bc" name="bc" required>
            <input type="hidden" name="emailhospital" id="emailhospital" value="<?php echo $_SESSION['hospitalemail']; ?>"/>
            
        </div>
            
        </div>
        
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Submit Request</button>
        </div>
    </div>
  </div>
</div>
</form>

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
    

    
    
    
    
  
    
    
</style>
