<form method="post" action="./db/register_receiver.php">
<div class="modal fade" id="RegisterReceiver" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Register As a Receiver</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        
        <div class="form-group">
        <input type="text" class="form-control register_form" placeholder="Full Name" id="fullname" name="fullname" required>
        <input type="email" class="form-control register_form" placeholder="Email ID" id="email" name="email" required>
     
        <select class="form-control register_form" id="bloodgroup" name="bloodgroup">
          <option value="A+">A+</option>
          <option value="O+">O+</option>
          <option value="B+">B+</option>
          <option value="AB+">AB+</option>
           <option value="A-">A-</option>
          <option value="O-">O-</option>
          <option value="B-">B-</option>
          <option value="AB-">AB-</option>
        </select>
        <input type="password" class="form-control register_form" placeholder="Password" id="password" name="password" required>
        
        
        
        
        
        </div>
            
        </div>
        
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Register</button>
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
    top: 18%;
    }
    
    input{  
    text-align: center;
    }
    
    input:hover{
       box-shadow: 0 0 0 2px #ff7961;
    }
    
    
  
    
    
</style>
