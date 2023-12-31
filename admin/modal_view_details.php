
<!-- The Modal -->
<div class="modal fade" id="myModal_view_details<?php echo $row['garment_id'];?>">
  <div class="modal-dialog modal-m">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">View Details</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container mt-5">
        <form action="../admin/Aupdate_details.php" method="POST">
        <div class="row">
                <div class="col-sm-12"> 
                  
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="firstname" class="form-label"><strong>Garment Type:</strong></label>
                            <input type="text" class="form-control" id="scharge" name="gtype" value = "<?php echo $row['garment_type'];?>">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="comment">Work description:</label>
                      <textarea class="form-control" rows="4" id="comment" name="workdesc"><?php echo $row['garment_work_desc'];?></textarea>
                    </div>
                    <div class="mb-3">
                            <label for="firstname" class="form-label"><strong>Service Type:</strong></label>
                            <input type="text" class="form-control" id="scharge" name="stype" value = "<?php echo $row['garment_type_of_serve'];?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong>Service Charge:</strong></label>
                        <input type="number" class="form-control" id="scharge" value="<?php echo $row['garment_serv_charge'];?>" name="scharge" >
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong>Down payment:</strong></label>
                        <input type="number" class="form-control" id="scharge" value="<?php echo $row['garment_bal'];?>" name="dpayment" >
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong>Pick up date:</strong></label>
                        <input type="date" class="form-control" id="pdate" name="pdate" value="<?php echo $row['garment_pickup_date'];?>">
                    </div>
                    <p>Current Status: <strong><?php echo $row['garment_status'];?></strong> </p>
                    <div class="mb-3">
                      <label for="role"  class="form-label"><strong>Status:</strong> </label>
                      <select class="form-select" name="gstatus">
                          <option value="Received">Received</option>
                          <option value="Working">Working</option>
                          <option value="Pickup">Pickup</option>
                          <option value="Finished">Finished</option>
                      </select>
                    </div>
                </div>
                <input type="hidden" name = "edit_id" value = "<?php echo $row['garment_id'];?>">
            <button type="submit" class="btn btn-primary mt-5">Update Workx</button>
        </div>
        </form>
          
    </div>
      </div>

    

    </div>
  </div>
</div>