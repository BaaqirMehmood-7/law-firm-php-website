<?php
session_start();
require '../includes/config.php';



    if (isset($_POST['delete_doc'])) {
        $id = mysqli_real_escape_string($con, $_POST['delete_doc']);
    
        $query = "DELETE FROM knowledgebase WHERE id='$id'";
        $query_run = mysqli_query($con, $query);
    
        if ($query_run) {
            $_SESSION['message'] = "Document Deleted Successfully";
        } else {
            $_SESSION['message'] = "Document Not Deleted";
        }
    
        header("Location: Notifications.php"); // Redirect to Notifications page
        exit(0);
    }





if (isset($_POST['add_notification'])) {
    // Debugging: Output the entire $_FILES array
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    // Ensure there's no exit statement here so we can continue processing if $_FILES is correct
    // exit;

    $notification = mysqli_real_escape_string($con, $_POST['Notificationss']);

    // Check if 'image' key exists in $_FILES array
    if (isset($_FILES['image'])) {
        $fileName = $_FILES["image"]["name"];
        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); // Ensure extension is lowercase
        $allowedTypes = array("jpg", "jpeg", "png", "gif","pdf");
        $tempName = $_FILES["image"]["tmp_name"];
        $targetPath = "Notif/" . $fileName;

        // Debugging: Output the file extension and allowed types
        echo "File extension: '" . $ext . "'<br>";
        echo "Allowed types: '" . implode("', '", $allowedTypes) . "'<br>";

        // Check if the file extension is allowed
        if (in_array($ext, $allowedTypes)) {
            // Try to move the uploaded file to the target path
            if (move_uploaded_file($tempName, $targetPath)) {
                // Prepare the SQL query
                $query = "INSERT INTO knowledgebase (Title, doc) VALUES ('$notification', '$fileName')";

                // Execute the query
                $query_run = mysqli_query($con, $query);

                // Check if the query was successful
                if ($query_run) {
                    $_SESSION['message'] = "Document Added Successfully";
                    header("Location: Adddoc.php");
                    exit(0);
                } else {
                    $_SESSION['message'] = "Document Not Added";
                    header("Location: Adddoc.php");
                    exit(0);
                }
            } else {
                $_SESSION['message'] = "File Upload Failed";
                header("Location: Adddoc.php");
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Invalid File Type";
            header("Location: Adddoct.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "No file uploaded or file key is incorrect";
        header("Location: Adddoc.php");
        exit(0);
    }
}

?>