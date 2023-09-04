

<!-- The Modal -->
<div class="modal fade" id="myModal_works<?php echo $row['id'];?>">
  <div class="modal-dialog modal-m">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Workx</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container mt-5">
        <form action="Aadd_workx.php" method="POST">
        <div class="row">
                <div class="col-sm-12"> 
                  <input type="hidden" name="cust_id" value="<?php echo $row['id'];?>">
                    <div class="mb-3">
                      <label for="role"  class="form-label"><strong>Garment type:</strong> </label>
                      <select class="form-select" name="gtype">
                          <option value="Clothing">Clothing</option>
                          <option value="Curtains">Curtains</option>
                          <option value="Rugs">Rugs</option>
                          <option value="Pillowbedsheet">Pillow/Bedsheet</option>
                          <option value="Other">Other</option>
                      </select>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="comment">Work description:</label>
                      <textarea class="form-control" rows="4" id="comment" name="workdesc"></textarea>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="role"  class="form-label"><strong>Service type:</strong> </label>
                        <select class="form-select" name="stype">
                            <option value="Repair">Repair</option>
                            <option value="Full Tailor">Full tailor</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong>Service Charge:</strong></label>
                        <input type="number" class="form-control" id="scharge" placeholder="Enter charge amount" name="scharge" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong>Pick up date:</strong></label>
                        <input type="date" class="form-control" id="pdate" name="pdate" required>
                    </div>
                </div>

            <button type="submit" class="btn btn-primary mt-5">Add Workx</button>
        </div>
        </form>
          
    </div>
      </div>

    

    </div>
  </div>
</div>