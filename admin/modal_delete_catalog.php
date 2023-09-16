

<!-- The Modal -->
<!-- GANITO LANG MAGPASA NG ID PARA LUMABAS ANG DATA SA MODAL -->
<div class="modal fade" id="myModal_delete_image<?php echo $row['id'];?>"> 
  <div class="modal-dialog modal-l">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><strong> Delete Catalog</strong></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container">
     
        <form action="../admin/Adelete_catalog.php" method="POST">
        <div class="row">
        <div class="col-sm-12"> 
                    <img style="width: 20rem;"  src="<?php echo $imageURL; ?>" alt="catalog image" />
                    <div class="mb-3">
                        <label for="firstname" class="form-label"><strong>Title:</strong></label>
                        <input type="text" class="form-control" id="scharge" value="<?php echo $row['title'];?>" name="cat_title" >
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="comment"><strong>Catalog description:</strong> </label>
                      <textarea class="form-control" rows="4" id="comment" value="" name="cat_desc"><?php echo $row['description'];?></textarea>
                    </div>
                   
                </div>
                   
                    <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                    <p><i class="text-danger">Are you sure to delete this catalog?</i></p>
            <button type="submit" class="btn btn-danger mt-5">Delete Catalog</button>

        </div>
        </form>
 
          
    </div>
      </div>

    

    </div>
  </div>
</div>