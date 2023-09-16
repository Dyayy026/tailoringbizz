
<!-- The Modal -->
<div class="modal fade" id="myModal_catalog">
  <div class="modal-dialog modal-m">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Catalog</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container mt-5">
        <form action="Aadd_catalog.php" method="POST" enctype="multipart/form-data">
        <div class="row">
                <div class="col-sm-12"> 
                    <div class="form-group">
                        <label for="firstname" class="form-label"><strong>Upload Catalog Image:</strong></label>
                        <input class="form-control" type="file" name="file" value="" />
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label"><strong>Add Title:</strong></label>
                        <input type="text" class="form-control" id="scharge" placeholder="Enter title" name="cat_title" required>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="comment"><strong>Catalog description:</strong> </label>
                      <textarea class="form-control" rows="4" id="comment" name="cat_desc"></textarea>
                    </div>
                   
                </div>

            <button type="submit" class="btn btn-primary mt-5" name="submit">Add Catalog</button>
        </div>
        </form>
          
    </div>
      </div>

    

    </div>
  </div>
</div>