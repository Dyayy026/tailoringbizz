<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/index-style.css">
    <link rel="stylesheet" href="css/sigun-style.css">
</head>
<body>
     <!-- NAVBAR -->
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php"><h2 id="tailoring-text">tailoring<span id="bizz-text">Bizz</span> </h2></a>
            </li>
            
            </ul>
        </div>
        </nav>
    <!-- NAVBAR END-->

    <div class="container mt-5">
        <form action="insert.php" method="POST">
        <div class="row">
            <h2 id="create-acc-text">Create an account</h2>
                <div class="col-sm-6"> 
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label">Firstname:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter firstname" name="fname" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label">Lastname:</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter lastname" name="lname" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label">Contact Number:</label>
                        <input type="number" class="form-control" id="cnumbe" placeholder="Enter contact number" name="cnum" required>
                    </div>
                </div>

                <div class="col-sm-6">
                     <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="pword" placeholder="Enter password" name="pword" required>
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
            <p class="signup-text mt-5 text-center">Already have an account? <a href="login.php">  Login</a></p>
        </div>
        </form>
          
    </div>
       
    <div class="footer pt-2">
        <p>TailoringBizz &copy2023 Developed by: Arjay Andal</p>
    </div>
</body>
</html>