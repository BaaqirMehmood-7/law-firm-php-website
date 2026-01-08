<?php
session_start();
include ('/xampp/htdocs/SamoonLaw/loginsystem/includes/config.php');
include('navbar.php');

// Number of notifications per page
$limit = 8;

// Get the current page number from URL parameter, default to 1 if not set
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the offset for the SQL query
$offset = ($page - 1) * $limit;

// Get the search keyword if provided
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Modify SQL query to include search keyword in the WHERE clause if provided
$totalResult = $con->query("SELECT COUNT(*) AS total FROM knowledgebase WHERE Title LIKE '%$search%'");
$totalNotifications = $totalResult->fetch_assoc()['total'];

// Calculate the total number of pages
$totalPages = ceil($totalNotifications / $limit);

// Fetch notifications for the current page with search filter
$sql = "SELECT * FROM knowledgebase WHERE Title LIKE '%$search%' LIMIT $limit OFFSET $offset";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Knowldege Base - Archer & Associates</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="icon" href="3.png" type="image/png">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 80%;
                margin: 50px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h4 {
                background-color: #266470;
                color: white;
                padding: 15px;
                text-align: center;
                border-radius: 5px;
                margin-bottom: 20px;
            }
            .search-bar {
                display: flex;
                justify-content: center;
                margin-bottom: 20px;
            }
            .search-bar input[type="text"] {
                width: 300px;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 5px 0 0 5px;
            }
            .search-bar button {
                padding: 8px 15px;
                border: none;
                background-color: #266470;
                color: white;
                border-radius: 0 5px 5px 0;
                cursor: pointer;
            }
            .notifications {
                max-height: 300px;
                overflow-y: auto;
                background-color: #f7f7f7;
                padding: 10px;
                border-radius: 5px;
            }
            table {
                width: 100%;
                border-spacing: 0;
            }
            td {
                background-color: #e0e0e0;
                padding: 10px;
                margin: 5px;
                border-radius: 4px;
                text-align: left;
            }
            .button-link {
                display: inline-block;
                padding: 6px 12px;
                background-color: #266470;
                color: white;
                text-decoration: none;
                border-radius: 4px;
                font-weight: bold;
                transition: background-color 0.3s;
            }
            .button-link:hover {
                background-color: #1e505d;
            }
            .pagination {
                text-align: center;
                margin-top: 20px;
            }
            .pagination ul {
                list-style: none;
                padding: 0;
                display: inline-block;
            }
            .pagination li {
                display: inline;
                margin: 0 5px;
            }
            .pagination a {
                text-decoration: none;
                padding: 8px 12px;
                color: #266470;
                background-color: #e0e0e0;
                border-radius: 4px;
            }
            .pagination a:hover {
                background-color: #266470;
                color: white;
            }
            .pagination .current {
                font-weight: bold;
                background-color: #266470;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h4>Knowledge Base</h4>

            <!-- Search Bar -->
            <div class="search-bar">
                <form action="" method="GET">
                    <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Search by title...">
                    <button type="submit">Search</button>
                </form>
            </div>

            <div class="notifications">
                <table>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $fileName = $row["doc"];
                            $imageUrl = "./loginsystem/admin/Notif/" . $fileName;
                            ?>
                            <tr>
                                <td><?php echo $row['Title']; ?> 
                                    
                                </td>
                                <td><a href="<?php echo $imageUrl; ?>" class="button-link">View</a></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td>No notifications found.</td></tr>";
                    }
                    ?>
                </table>
            </div>

            <!-- Pagination Controls -->
            <div class="pagination">
                <?php if ($totalPages > 1): ?>
                    <nav>
                        <ul>
                            <?php if ($page > 1): ?>
                                <li><a href="?page=<?php echo $page - 1; ?>&search=<?php echo urlencode($search); ?>">Previous</a></li>
                            <?php endif; ?>
                            
                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                <li><a href="?page=<?php echo $i; ?>&search=<?php echo urlencode($search); ?>" class="<?php if ($i == $page) echo 'current'; ?>">
                                    <?php echo $i; ?>
                                </a></li>
                            <?php endfor; ?>
                            
                            <?php if ($page < $totalPages): ?>
                                <li><a href="?page=<?php echo $page + 1; ?>&search=<?php echo urlencode($search); ?>">Next</a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
        </div>

        <?php include('footer.php'); ?>
    </body>
</html>
