<form method="post" action="./db/takeaction_db.php">
<div class="modal fade" id="takeaction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Take Action</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        
        <div class="form-group">
              <select class="form-control register_form form-group" id="status" name="status">
                <option value="accept">Accept</option>
                <option value="reject">Reject</option>
               </select>  
            
        </div>
            
        </div>
        
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Submit</button>
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
