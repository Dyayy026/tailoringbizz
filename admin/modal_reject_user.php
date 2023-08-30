

<!-- The Modal -->
<!-- GANITO LANG MAGPASA NG ID PARA LUMABAS ANG DATA SA MODAL -->
<div class="modal fade" id="myModal_reject<?php echo $row['id'];?>"> 
  <div class="modal-dialog modal-l">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><strong> Reject Customer</strong></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container">
     
        <form action="../admin/Areject_user.php" method="POST">
        <div class="row">
                    <div class="mb-3">
                        <label for="firstname" class="form-label"><strong>Customer firstname:</strong> </label>
                        <input type="text" class="form-control" id="address" value="<?php echo $row['cust_fname'];?>" name="fname" readOnly>
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label"><strong>Customer lastname:</strong> </label>
                        <input type="text" class="form-control" id="address" value="<?php echo $row['cust_lname'];?>" name="lname" readOnly>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong> Contact Number:</strong></label>
                        <input type="number" class="form-control" id="cnumbe" value="<?php echo $row['cust_cnumber'];?>" name="cnum" readOnly>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong> Address:</strong></label>
                        <input type="text" class="form-control" id="cnumbe" value="<?php echo $row['cust_address'];?>" name="address" readOnly>
                    </div>
                     
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong>Customer Description:</strong> </label>
                        <input type="text" class="form-control" id="cust_desc" value="<?php echo $row['cust_desc'];?>" name="cust_desc" readOnly>
                    </div>
                    <label for="role"  class="form-label"><strong>User Role: (<i><?php echo $row['cust_role'];?></i>)</strong> </label>
                    <select class="form-select" name="role">
                        <option disabled>Sewer</option>
                        <option value="Customer">Customer</option>
                    </select>
                    </div>
                    <p><i class="text-danger">Reject this customer's request for access</i></p>
                    <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
            <button type="submit" class="btn btn-danger">Reject</button>

        </div>
        </form>
 
          
    </div>
      </div>

    

    </div>
  </div>
</div>