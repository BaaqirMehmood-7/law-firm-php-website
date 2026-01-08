<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Footer UI design ">
    <meta name="author" content="Archer & Associates">
    <meta name="keywords" content="footer,law,criminal law,Education law,Intellectual property law,Service law">
    <title>Footer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="#">
    <script src="https://kit.fontawesome.com/5d72166fb5.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        
        /* Isolating the footer styles within a specific class to prevent conflicts */
        .learningrobo-footer * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* Updated Background and Text Color */
        .learningrobo-footer {
            margin: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: end;
            background-color: #266470;
            padding: 20px 0;
        }

        .learningrobo-footer .p1 {
            width: 98%;
            background-color: #266470;
            border-radius: 7px;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .learningrobo-footer .d1 {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            color: #ffffff;
        }

        .learningrobo-footer a {
            text-decoration: none;
            color: #ffffff;
            transition: color 0.3s;
        }

        .learningrobo-footer a:hover {
            color: #f0a500; /* Change color on hover */
        }

        .learningrobo-footer h1, 
        .learningrobo-footer h3, 
        .learningrobo-footer h5 {
            margin: 0;
            cursor: pointer;
            color: inherit;
        }

        .learningrobo-footer .d2 {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
        }

        .learningrobo-footer .social-icon {
            display: flex;
            margin: 13px;
            cursor: pointer;
            transition: transform 0.3s, color 0.3s; /* Added transition */
        }

        .learningrobo-footer .social-icon a {
            color: #ffffff;
            transition: color 0.3s;
        }

        .learningrobo-footer .social-icon a:hover {
            color: #f0a500; /* Change color on hover */
            transform: scale(1.2); /* Slightly enlarge icon on hover */
        }

        .learningrobo-footer hr {
            border: 1px solid #ffffff;
            width: 100%;
        }

        .learningrobo-footer .cp {
            font-size: 13px;
            color: #ffffff;
            text-align: center;
            margin: 10px 0;
        }

        .learningrobo-footer .credit {
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #ffffff;
        }

        .learningrobo-footer .credit span {
            color: tomato;
            font-size: 20px;
        }

        .learningrobo-footer .credit a {
            text-decoration: none;
            color: #ffffff;
            font-weight: 800;
        }

        /* Responsiveness */
        @media screen and (max-width: 630px) {
            .learningrobo-footer .d1 {
                flex-direction: column;
                align-items: start;
            }

            .learningrobo-footer .p1 {
                width: 96%;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <div class="learningrobo-footer">
        <div class="p1">
            <div class="d1">
                <div class="sub1">
                    <a href="#"><h1>Archer & Associates</h1></a>
                    <a href="#"><h3></h3></a>
                </div>
                <div class="sub2">
                    <a href="index.php"><h5>HOME</h5></a>
                    <a href="Practice.php"><h5>AREAS OF PRACTICE</h5></a>
                    <a href="opportunities.php"><h5>OPPORTUNITIES</h5></a>
                </div>
                <div class="sub3">
                    <a href="notification.php"><h5>KNOWLEDGE BASE</h5></a>
                    <a href="Contactus.php"><h5>CONTACT US</h5></a>
                    <a href="aboutus.php"><h5>ABOUT US</h5></a>
                </div>
                <div class="sub5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.2148236686503!2d74.7649598751752!3d34.01269631981835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e1915039d72c19%3A0x8a537e3edaffc07b!2sFriends%20Enclave%20Colony!5e0!3m2!1sen!2sin!4v1729961383883!5m2!1sen!2sin" width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <hr>
            <div class="d2">
                <div class="social-icon">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                </div>
                <div class="social-icon">
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                </div>
                <div class="social-icon">
                    <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                </div>
            </div>
            <div class="cp">©Copyright. All Rights Reserved</div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
