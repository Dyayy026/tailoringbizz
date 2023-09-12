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
    <title>Admin Workx</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../css/index-style.css">
    <link rel="stylesheet" href="../css/side-bar.css">
    <link rel="stylesheet" href="../css/workx-style.css">


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
                        <a href="../admin/workx.php" class="nav_link active"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Workx</span> </a>
                        <a href="../admin/catalog.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Catalog</span> </a> 
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
                  <button type="button" class="btn btn-info mt-4" data-bs-toggle="modal" data-bs-target="#myModal_works2">
                    Add Workx
                    </button>
            <?php
                $sql = "SELECT garments.cust_id, customers.cust_fname, customers.cust_lname, garments.garment_status, garments.garment_recieve_date, 
                        garment_pickup_date, garment_id, garment_type, garment_receivedby, garment_serv_charge, garment_work_desc, garment_type_of_serve
                        FROM garments
                        INNER JOIN customers 
                        ON garments.cust_id = customers.id 
                        ORDER BY garments.cust_id 
                        AND garments.garment_status = 'Received' DESC";
                $result = mysqli_query($conn, $sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        ?>
            
                <div class="col-md-4 mt-3">
                    <div class="card p-3 mb-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                                <div class="ms-2 c-details">
                                    <h6 class="mb-0"></h6> <span>Received: <?php echo $row['garment_recieve_date'];?></span>
                                    <h5 class="mb-0"></h5> <span>Pic-kup: <strong> <?php echo $row['garment_pickup_date'];?></strong></span>
                                </div>
                            </div>
                            <div class="badge"><span>Sewer: <?php echo $row['garment_receivedby'];?></span> </div>
                        </div>
                        <div class="mt-5">
                            <h3 class="heading"><?php echo $row['garment_type'];?></h3>
                            <h6><?php echo $row['cust_fname'] . " " . $row['cust_lname'];?></h6>
                            <div class="card card-timeline px-2 border-none"> 
                                <ul class="bs4-order-tracking"> 
                                    <?php
                                        if($row['garment_status'] == "Received"){
                                            ?>
                                            <li class="step active1"> <div><i class="fas fa-user"></i></div> Recieved </li> 
                                            <li class="step"> <div><i class="fas fa-bread-slice"></i></div> Working </li> 
                                            <li class="step"> <div><i class="fas fa-truck"></i></div> Pickup </li> 
                                            <li class="step"> <div><i class="fas fa-folder"></i></div> Finished </li> 
                                            <?php
                                        }
                                        else if($row['garment_status'] == "Working"){
                                            ?>
                                            <li class="step active1"> <div><i class="fas fa-user"></i></div> Recieved </li> 
                                            <li class="step active1"> <div><i class="fas fa-bread-slice"></i></div> Working </li> 
                                            <li class="step"> <div><i class="fas fa-truck"></i></div> Pickup </li> 
                                            <li class="step"> <div><i class="fas fa-folder"></i></div> Finished </li> 
                                            <?php
                                        }
                                        else if($row['garment_status'] == "Pickup"){
                                            ?>
                                            <li class="step active1"> <div><i class="fas fa-user"></i></div> Recieved </li> 
                                            <li class="step active1"> <div><i class="fas fa-bread-slice"></i></div> Working </li> 
                                            <li class="step active1"> <div><i class="fas fa-truck"></i></div> Pickup </li> 
                                            <li class="step"> <div><i class="fas fa-folder"></i></div> Finished </li> 
                                            <?php
                                        }
                                        else if($row['garment_status'] == "Finished"){
                                            ?>
                                            <li class="step active1"> <div><i class="fas fa-user"></i></div> Recieved </li> 
                                            <li class="step active1"> <div><i class="fas fa-bread-slice"></i></div> Working </li> 
                                            <li class="step active1"> <div><i class="fas fa-truck"></i></div> Pickup </li> 
                                            <li class="step active1"> <div><i class="fas fa-folder"></i></div> Finished </li> 
                                            <?php
                                        }
                                    ?>
                                  
                                </ul> 
                                <p><strong>Garment Id: <?php echo $row['garment_id'];?></strong></p>
                                <h6>Balance: ₱ <span class="text-danger"><?php echo $row['garment_serv_charge'];?></span></h6>
                                <button type="button" class="btn btn-info mt-2" data-bs-toggle="modal" data-bs-target="#myModal_works<?php echo $row['cust_id'];?>">
                                    Add Workx
                                </button>
                                <button type="button" class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#myModal_view_details<?php echo $row['cust_id'];?>">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
       include 'modal_add_workx.php';
       include 'modal_view_details.php';

                         }
                     }

                ?>
        </div>
            
        </div>
    <!-- PARA TO SA ADD WORKX BUTTON -->
    <?php  include 'modal_add_workx2.php';?> 
    <!--Container Main end-->
    <!-- SIDEBAR END-->
    </div>




    <script src="../js/sidebar.js"></script>

    <!-- FOR SIDEBAR -->

    <!-- PROGRESS BAR -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>

