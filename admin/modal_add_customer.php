

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Customer</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container mt-5">
        <form action="../admin/admin_insert.php" method="POST">
        <div class="row">
                <div class="col-sm-6"> 
                    <div class="mb-3 ">
                        <label for="firstname" class="form-label"><strong>Firstname:</strong> </label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter firstname" name="fname" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong>Lastname:</strong> </label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter lastname" name="lname" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong>Address:</strong> </label>
                        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong> Contact Number:</strong></label>
                        <input type="number" class="form-control" id="cnumbe" placeholder="Enter contact number" name="cnum" required>
                    </div>
                </div>

                <div class="col-sm-6">
                     <div class="mb-3">
                        <label for="firstname" class="form-label"><strong>Password:</strong> </label>
                        <input type="password" class="form-control" id="pword" placeholder="Enter password" name="pword" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label"><strong>Customer Description:</strong> </label>
                        <input type="text" class="form-control" id="cust_desc" placeholder="Enter customer description" name="cust_desc">
                    </div>
                    <label for="role"  class="form-label"><strong>User Role:</strong> </label>
                    <select class="form-select" name="role">
                        <option disabled>Sewer</option>
                        <option value="Customer">Customer</option>
                    </select>
                </div>

            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </div>
        </form>
          
    </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>