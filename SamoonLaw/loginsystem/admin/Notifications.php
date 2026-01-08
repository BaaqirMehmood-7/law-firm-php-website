<?php 
session_start();
include_once('../includes/config.php');

// Check if the user is logged in and is an admin
if (!isset($_SESSION['login']) || !isset($_SESSION['adminid']) || strlen($_SESSION['adminid']) == 0) {
    header('location:logout.php');
    exit(); // Stop further script execution if not logged in
}

// For deleting notifications
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Use intval for additional security
    $stmt = $con->prepare("DELETE FROM knowledgebase WHERE id=?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $_SESSION['message'] = "Notification deleted successfully."; // Set session message
    } else {
        $_SESSION['message'] = "Failed to delete notification."; // Set error message
    }
    $stmt->close();
    header("Location: Notifications.php"); // Redirect to Notifications.php to display the message
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Manage Knowledge Base</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        /* Custom styles for alert message */
        .alert {
            position: relative;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
        .alert .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: #721c24;
            font-weight: bold;
        }
    </style>
</head>
<body class="sb-nav-fixed">
    <?php include_once('includes/navbar.php'); ?>
    <div id="layoutSidenav">
        <?php include_once('includes/sidebar.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Manage Knowledge Base</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Knowledge Base</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <a href="Adddoc.php" class="btn btn-primary float-end">Add Document</a>
                        </div>
                        <div class="card-body">
                            <?php
                            // Display session message if it exists
                            if (isset($_SESSION['message'])) {
                                echo "<div class='alert alert-danger'>" . htmlspecialchars($_SESSION['message'], ENT_QUOTES, 'UTF-8') . 
                                     "<span class='close-btn' onclick='this.parentElement.style.display=\"none\";'>&times;</span></div>";
                                unset($_SESSION['message']); // Clear the message after displaying it
                                echo "<script>setTimeout(function(){ document.querySelector('.alert').style.display='none'; }, 5000);</script>"; // Auto-hide after 5 seconds
                            }
                            ?>
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Notification</th>
                                        <th>File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $ret = mysqli_query($con, "SELECT * FROM knowledgebase");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($ret)) {  
                                        $fileName = htmlspecialchars($row["doc"], ENT_QUOTES, 'UTF-8');
                                        $imageUrl = "Notif/" . $fileName;
                                    ?>
                                    <tr>
                                        <td><?php echo $cnt; ?></td>
                                        <td><?php echo htmlspecialchars($row['Title'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><a href="<?php echo $imageUrl; ?>" target="_blank">View</a></td>
                                        <td>
                                            <form action="Notifications.php?id=<?php echo $row['Id']; ?>" method="POST" class="d-inline">
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php 
                                        $cnt++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php include('../includes/footer.php'); ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>
</html>
