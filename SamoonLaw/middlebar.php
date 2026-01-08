<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Middle Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMuvg+6WR8+LnVxtgvbFyj3/KUQsJxH8XoK8C3W" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
           
        }
        .flex-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: -5%;
            background-color: rgb(255, 255, 255);
            z-index: 1;
        }
        .flex-container div {
            background-color: #266470;
            margin: 10px;
            margin-top: 00px;
            padding: 20px;
            width: 100px;
            text-align: center;
            line-height: 1.5;
            transition: background-color 0.7s;
        }
        .flex-container div a {
            text-decoration: none;
            color: #ffff;
            font-size: 1rem;
            padding: 4px;
            display: block;
        }
        .flex-container div i {
            color: #ffff;
            display: block;
            font-size: 24px;
        }
        .flex-container div:hover {
            background-color: rgb(0, 0, 0);
        }
        .flex-container1 {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .flex-container1 div {
            background-color: #f2ecec;
            color: #266470;
            margin: 10px;
            border: solid 1px #266470;
            width: 700px;
            text-align: center;
        }
        .flex-container1 h4 {
            margin-right: 70%;
        }
        .flex-container1 button {
            color: #ffffff;
            background-color: #266470;
            text-align: center;
            text-decoration: none;
            width: 100%;
            height: 30px;
            cursor: pointer;
            border: none;
        }
    </style>
</head>
<body>
    <div class="flex-container">
        <div><i class="fa-solid fa-user"></i><a href="aboutus.php">About Us</a></div>
        <div><i class="fa-solid fa-book"></i><a href="notification.php">Knowldege Base</a></div>
        <div><i class="fa-solid fa-user-graduate"></i><a href="opportunities.php">Opportunities</a></div>
        <div><i class="fa-solid fa-phone"></i><a href="contactus.php">Contact</a></div>
        <!-- <div><i class="fa-solid fa-images"></i><a href="gallery.php">Gallery</a></div> -->
    </div>
   
</body>
</html>
