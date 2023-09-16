<?php 
// Include the database configuration file 
include_once '../conn.php'; 
 
$statusMsg = ''; 

$title = $_POST['cat_title'];
$desc = $_POST['cat_desc'];
 
// File upload directory 
$targetDir = "../uploads/"; 
 
if(isset($_POST["submit"])){ 
    if(!empty($_FILES["file"]["name"])){ 
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                $insert = $conn->query("INSERT INTO images (file_name, title, description, uploaded_on) VALUES ('".$fileName."','$title', '$desc', NOW())"); 
                if($insert){ 
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully."; 

                    echo "<SCRIPT> 
                    alert('$statusMsg')
                    window.location.replace('../admin/catalog.php');
                    </SCRIPT>";
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                    echo "<SCRIPT> 
                    alert('$statusMsg')
                    window.location.replace('../admin/catalog.php');
                    </SCRIPT>";
                }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
                echo "<SCRIPT> 
                alert('$statusMsg')
                window.location.replace('../admin/catalog.php');
                </SCRIPT>";
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            echo "<SCRIPT> 
            alert('$statusMsg')
            window.location.replace('../admin/catalog.php');
            </SCRIPT>";
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
        echo "<SCRIPT> 
        alert('$statusMsg')
        window.location.replace('../admin/catalog.php');
        </SCRIPT>";
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>