<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account</title>

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

        <div class="row">
        <h2 id="create-acc-text">Login your account</h2>
            <div class="col-sm-6 mt-5">
                <h1 class="login-texts">Tailor</h1>
                <h1 id="login-texts">Suits</h1>
                <h1 class="login-texts">Your Style</h1>
            </div>
            <div class="col-sm-6 mt-5">
                <form action="action-login.php" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label">Firstname:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter firstname" name="fname" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="firstname" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="pword" placeholder="Enter password" name="pword" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5 btn-login">Login</button>
                    <p class="signup-text mt-5">Don't have an account? <a href="signup.php">  Signup now</a></p>
                </form>
            </div>
        </div>
       
          
    </div>
       
    <div class="footer pt-2">
        <p>TailoringBizz &copy2023 Developed by: Arjay Andal</p>
    </div>
</body>
</html>


<!-- LOGIN SOURCE CODE HERE
link
https://codeshack.io/secure-login-system-php-mysql/ -->