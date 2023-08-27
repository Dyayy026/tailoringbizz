<?php

include('conn.php');



// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["fname"];
    $password = $_POST["pword"];

    // Prepare a statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM customers WHERE cust_fname=?");
    $stmt->bind_param("s", $username);

    // Execute the statement
    $stmt->execute();

    // Get the result set
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc(); // Fetch user data as an associative array
        if (password_verify($password, $user["cust_password"])) {

            session_start();

            $_SESSION["username"] = $user["cust_fname"];
            $_SESSION["role"] = $user["cust_role"];
            
            if ($user["cust_role"] == "Admin" && $user["cust_status"] == "Approved") {
                header("Location: admin/admin_dashboard.php"); // Redirect to admin dashboard
                echo "Welcome admin!";
                exit();
            }
            else if($user["cust_role"] == "Customer" && $user["cust_status"] == "Approved"){
                //header("Location: guest_dashboard.php"); // Redirect to guest dashboard
                echo "hello customer!";
                exit();
            }
            else {
                header("Location: appoval_msg.php");
            }
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Invalid username.";
    }

    // Close the statement
    $stmt->close();
}

// ... (database connection closing code)


?>



