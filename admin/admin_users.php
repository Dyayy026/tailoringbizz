<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

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
                        <a href="#" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                        <a href="../admin/admin_users.php" class="nav_link active" > <i class='bx bx-user nav_icon'></i> <span class="nav_name">Customers</span> </a> 
                        <a href="../admin/workx.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Workx</span> </a>
                        <a href="../admin/catalog.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Catalog</span> </a> 
                        <a href="../admin/customer_comp.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Customer Complain</span> </a>
                        <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> </div>
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>

      

        <!--Container Main start-->
        <div class="height-100">
        <div class="jumbotron mt-5">
            <div class="row">
                <div class="col-md-12">
                     <h1>All Users</h1>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#myModal">
                    Add Customer
                    </button>
                    <a href="../admin/admin_user_pending.php"> <button class="btn btn-secondary mt-3">Pending Customer</button></a>
                    <a href="../admin/admin_user_approved.php"><button class="btn btn-secondary mt-3">Approved Customer</button></a>
                    <a href="../admin/admin_user_rejected.php"><button class="btn btn-secondary mt-3">Rejected Customer</button></a>

                    
                    <table class="table table-dark mt-5">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Contact Number</th>
                                <th>Description</th>
                                <th>Address</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Balance</th>
                                <th>Action</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            
                           <?php require '../conn.php';?>
                           <?php 

                                $sql = "SELECT * FROM customers ORDER BY id DESC";
                                $result = $conn->query($sql);

                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['cust_fname'] ." ". $row['cust_lname'];?></td>
                                            <td><?php echo $row['cust_cnumber'];?></td>
                                            <td><?php echo $row['cust_desc'];?></td>
                                            <td><?php echo $row['cust_address'];?></td>
                                            <td><?php echo $row['cust_role'];?></td>
                                                <?php 
                                                    if($row['cust_status'] == "Pending"){
                                                        echo "<td style='color: mediumslateblue;'>". $row["cust_status"]."</td>";
                                                    }
                                                    else if($row['cust_status'] == "Approved"){
                                                        echo "<td style='color: blueviolet;'>". $row["cust_status"]."</td>";
                                                    }
                                                    else if($row['cust_status'] == "Rejected"){
                                                        echo "<td style='color: crimson;'>". $row["cust_status"]."</td>";
                                                    }
                                                ?>
                                            <td><?php echo $row['cust_balance'];?></td>
                                            <td>
                                           
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $row['id'];?>">
                                                    Edit Customer
                                                </button>
                                            
                                                <a href=""><button class="btn btn-danger text-light">Delete</button></a>
                                            </td>
                                        </tr>
                                        
                                        <?php
                                    include '../admin/modal_edit_user.php';

                                    }
                                }

                           ?>
                           
                        </tbody>
                    </table>
                </div>
               
            </div>
            
        </div>
    <!--Container Main end-->
    <!-- SIDEBAR END-->
       
    </div>

 <?php include '../admin/modal_add_customer.php';?>

    <div class="footer pt-2">
        <p>TailoringBizz &copy2023 Developed by: Arjay Andal</p>
    </div>

    <script src="../js/sidebar.js"></script>

    <!-- FOR SIDEBAR -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

