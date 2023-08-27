<?php
    require '../conn.php';
?>




<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Approve Customer</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container mt-5">
        <form action="#" method="POST">
        <div class="row">

        <?php
            $id = $_GET['id'];

            $sql = "SELECT* FROM customers WHERE id = $id";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){

      ?>
                <div class="col-sm-12"> 
                    <div class="mb-3 ">
                        <label for="firstname" class="form-label">Firstname:</label>
                        <input type="text" class="form-control" id="fname" value="<?php echo $row['cust_fname'] $row['cust_lname'];?>" name="fname" required>
                    </div>
                  
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label">Contact Number:</label>
                        <input type="number" class="form-control" id="cnumbe" placeholder="Enter contact number" name="cnum" required>
                    </div>
                     
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label">Customer Description:</label>
                        <input type="text" class="form-control" id="cust_desc" placeholder="Enter customer description" name="cust_desc">
                    </div>
                    <label for="role"  class="form-label">User Role:</label>
                    <select class="form-select" name="role">
                        <option disabled>Sewer</option>
                        <option value="Customer">Customer</option>
                    </select>
                    </div>
            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </div>
        </form>
        <?php
    }
}

?>
          
    </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>