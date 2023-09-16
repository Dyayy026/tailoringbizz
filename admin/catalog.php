<?php
    include'../conn.php';

    if(!isset($_SESSION['username'])){
        header("location:../login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Catalog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../css/index-style.css">
    <link rel="stylesheet" href="../css/side-bar.css">
    <link rel="stylesheet" href="../css/workx-style.css">
    <link rel="stylesheet" href="../css/image-style.css">


    <!-- PROGRESS BAR -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    
  </head>


     <!-- SIDEBAR MENU CDN -->
    <!-- SCRIPTS IS AT THE BOTTOM PART -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>



<body id="body-pd">
    <!-- SIDEBAR -->
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">TailoringBizz</span> </a>
                    <div class="nav_list"> 
                        <a href="../admin/admin_dashboard.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                        <a href="../admin/admin_users.php" class="nav_link" > <i class='bx bx-user nav_icon'></i> <span class="nav_name">Customers</span> </a> 
                        <a href="../admin/workx.php" class="nav_link "> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Workx</span> </a>
                        <a href="../admin/catalog.php" class="nav_link active"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Catalog</span> </a> 
                        <a href="../admin/customer_comp.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Customer Complain</span> </a>
                        <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> </div>
                </div> <a href="../logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>

        <!--Container Main start-->
        <div class="height-100">
            <div class="container mt-5 mb-3">
                <div class="row">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-info mt-4" data-bs-toggle="modal" data-bs-target="#myModal_catalog">
                        Add Catalog
                    </button>
                    
                        <?php
                            // Get images from the database
                            $query = $conn->query("SELECT * FROM images ORDER BY uploaded_on DESC");

                            if($query->num_rows > 0){
                                while($row = $query->fetch_assoc()){
                                    $imageURL = '../uploads/'.$row["file_name"];
                            ?>
                        <div class="col-md-4 mt-3">
                            <div class="card mt-5" style="width: 20rem;">
                                <img src="<?php echo $imageURL; ?>" alt="catalog image" />
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['title'];?></h5>
                                    <p class="card-text"><?php echo $row['description'];?></p>
                                      <!-- Button to Open the Modal -->
                                    <button type="button" class="btn btn-danger mt-4" data-bs-toggle="modal" data-bs-target="#myModal_delete_image<?php echo $row['id'];?>">
                                       Delete Image
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php include '../admin/modal_delete_catalog.php';?>
                        <?php }
                        }else{ ?>
                            <p class="text-light text-center mt-5">No image(s) found...</p>
                    <?php } ?>
                    </div>
                   
                 
                </div>
                
            </div>
        </div>
    <!--Container Main end-->
    <!-- SIDEBAR END-->
 </div>
<?php include '../admin/modal_add_catalog.php';?>

    <script src="../js/sidebar.js"></script>

    <!-- FOR SIDEBAR -->

    <!-- PROGRESS BAR -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>

