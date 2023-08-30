<?php
    session_start();
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
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>

      

        <!--Container Main start-->
        <div class="height-100">
        <div class="jumbotron mt-5">
        <div class="container mt-5 mb-3">
            <div class="row">

            <?php

            include '../conn.php';
            
                $sql = "SELECT * FROM customers ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        ?>
            
                <div class="col-md-4 mt-5">
                    <div class="card p-3 mb-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                                <div class="ms-2 c-details">
                                    <h6 class="mb-0"></h6> <span>received date</span>
                                </div>
                            </div>
                            <div class="badge"> <span>Status</span> </div>
                        </div>
                        <div class="mt-5">
                            <h3 class="heading"><?php echo $row['cust_fname'] . ' ' . $row['cust_lname'];?><br></h3>
                            <div class="">
                                <div class="progress">
                                    <ul class="stepper">
                                    <li class="done">
                                        <div class="item">
                                        Step1
                                        </div>
                                    </li>
                                    <li class="done">
                                        <div class="item">
                                        Step2
                                        </div>
                                    </li>
                                    <li class="wip">
                                        <div class="item">
                                        Step3
                                        </div>
                                    </li>
                                    <li class="ready">
                                        <div class="item">
                                        Step4
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                                <div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <?php

                         }
                     }

                ?>
                   
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

