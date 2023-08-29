

<!-- The Modal -->
<!-- GANITO LANG MAGPASA NG ID PARA LUMABAS ANG DATA SA MODAL -->
<div class="modal fade" id="myModal<?php echo $row['id'];?>"> 
  <div class="modal-dialog modal-l">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><strong> Edit Customer</strong></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container">
     
        <form action="../admin/Aedit_user.php" method="POST">
        <div class="row">
                    <div class="mb-3">
                        <label for="firstname" class="form-label"><strong>Customer firstname:</strong> </label>
                        <input type="text" class="form-control" id="address" value="<?php echo $row['cust_fname'];?>" name="fname">
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label"><strong>Customer lastname:</strong> </label>
                        <input type="text" class="form-control" id="address" value="<?php echo $row['cust_lname'];?>" name="lname">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong> Contact Number:</strong></label>
                        <input type="number" class="form-control" id="cnumbe" value="<?php echo $row['cust_cnumber'];?>" name="cnum" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong> Address:</strong></label>
                        <input type="text" class="form-control" id="cnumbe" value="<?php echo $row['cust_address'];?>" name="address" required>
                    </div>
                     
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong>Customer Description:</strong> </label>
                        <input type="text" class="form-control" id="cust_desc" value="<?php echo $row['cust_desc'];?>" name="cust_desc">
                    </div>
                    <label for="role"  class="form-label"><strong>User Role: (<i><?php echo $row['cust_role'];?></i>)</strong> </label>
                    <select class="form-select" name="role">
                        <option disabled>Sewer</option>
                        <option value="Customer">Customer</option>
                    </select>
                    </div>
                    <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
            <button type="submit" class="btn btn-primary mt-5">Update</button>

        </div>
        </form>
 
          
    </div>
      </div>

    

    </div>
  </div>
</div>