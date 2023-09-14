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
    <title>Pending Users</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../css/index-style.css">
    <link rel="stylesheet" href="../css/side-bar.css">

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
                        <a href="../admin/admin_users.php" class="nav_link active" > <i class='bx bx-user nav_icon'></i> <span class="nav_name">Customers</span> </a> 
                        <a href="../admin/workx.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Workx</span> </a>
                        <a href="../admin/catalog.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Catalog</span> </a> 
                        <a href="../admin/customer_comp.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Customer Complain</span> </a>
                        <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> </div>
                </div> <a href="../logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>

      

        <!--Container Main start-->
        <div class="height-100">
        <div class="jumbotron mt-5">
            <div class="row">
                <div class="col-md-12">
                     <h1>Pending Users</h1>
                    <!-- Button to Open the Modal -->
                   <!-- Button to Open the Modal -->
                   <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#myModal">
                    Add Customer
                    </button>
                    <a href="../admin/admin_user_pending.php"> <button class="btn btn-info mt-3">Pending Customer</button></a>
                    <a href="../admin/admin_user_approved.php"><button class="btn btn-secondary mt-3">Approved Customer</button></a>
                    <a href="../admin/admin_user_rejected.php"><button class="btn btn-secondary mt-3">Rejected Customer</button></a>

                    
                    <table class="table table-dark mt-5">
                        <thead>
                            <tr>
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Contact Number</th>
                                <th>Description</th>
                                <th>Address</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            
                           <?php 
                                $sql = "SELECT * FROM customers WHERE cust_role = 'Customer' AND cust_status = 'Pending' ORDER BY id DESC";
                                $result = $conn->query($sql);

                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['cust_id'];?></td>
                                            <td><?php echo $row['cust_fname'] ." ". $row['cust_lname'];?></td>
                                            <td><?php echo $row['cust_cnumber'];?></td>
                                            <td><?php echo $row['cust_desc'];?></td>
                                            <td><?php echo $row['cust_address'];?></td>
                                            <td><?php echo $row['cust_role'];?></td>
                                            <td style="color: mediumslateblue;"><?php echo $row['cust_status'];?></td>
                                            <td>

                                            <a href="#id=<?php echo $row['id'];?>">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal_approve<?php echo $row['id'];?>">
                                                    Approve
                                                </button>
                                            </a>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal_reject<?php echo $row['id'];?>">
                                                    Reject
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <?php
                                     include '../admin/modal_approved_user.php';
                                     include '../admin/modal_reject_user.php';
                                    }
                                }
                                include '../admin/modal_add_customer.php';
                           ?>
                           
                        </tbody>
                    </table>
                </div>
               
            </div>
            
        </div>
    <!--Container Main end-->
    <!-- SIDEBAR END-->
       

    </div>


    <div class="footer pt-2">
        <p>TailoringBizz &copy2023 Developed by: Arjay Andal</p>
    </div>

    <script src="../js/sidebar.js"></script>
    <?php include('modal_add_user.php');?>

    <!-- FOR SIDEBAR -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

