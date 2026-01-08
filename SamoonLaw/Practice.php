<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="3.png" type="image/png">
    <title>Area of Practice</title>
    <style>
        /* Target only this section using #practice-area */
        #practice-area {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            
        }
        #practice-area .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        #practice-area .header-container {
            text-align: center;
            margin-top: 30px;
        }
        #practice-area h1 {
            font-size: 2.5em;
            margin: 0;
        }
        #practice-area .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 50px auto;
            gap: 20px;
            max-width: 1200px;
            padding: 0 15px;
        }
        #practice-area .img1 {
            border: 1px solid;
            width: 150px;
            padding: 15px;
            color: white;
            background-color: rgb(245, 242, 236);
            text-align: center;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        #practice-area .img1:hover {
            background-color: #266470;
        }
        #practice-area .img1 img {
            width: 100%;
            max-width: 120px;
            height: auto;
            
        }
        #practice-area .img1 p {
            color: black;
            
        }
        #practice-area .img1 a {
            text-decoration: none;
        
        }
        #practice-area footer {
            text-align: center;
            background-color: #f1f1f1;
            padding: 10px;
            
        }
        
        /* Responsive design for #practice-area */
        @media (max-width: 768px) {
            #practice-area h1 {
                font-size: 2em;
            }
            #practice-area .img1 {
                width: 120px;
                padding: 10px;
            }
            #practice-area .container {
                gap: 15px;
                margin: 30px auto;
            }
        }
        
        @media (max-width: 480px) {
            #practice-area h1 {
                font-size: 1.8em;
            }
            #practice-area .img1 {
                width: 100px;
                padding: 8px;
            }
            #practice-area .container {
                gap: 10px;
                margin: 20px auto;
            }
        }
    </style>
</head>
<body>
    <div id="practice-area">
        <div class="content">
            <div class="header-container">
                <h1>Areas of Practice</h1>
            </div>

            <div class="container">
                <div class="img1">
                    <a href="civil.php"><img src="icon/civil.png" alt="Civil Law">
                    <p>Civil Law</p></a>
                </div>
                <div class="img1">
                    <a href="service.php" ><img src="icon/service.png" alt="Service Law">
                    <p>Service Law</p></a>
                </div>
                <div class="img1">
                   <a href="criminal.php"> <img src="icon/criminal.png" alt="Criminal Law">
                    <p>Criminal Law</p></a>
                </div>
                <div class="img1">
                    <a href="Intellect.php"><img src="icon/intellect.png" alt="Intellectual Property">
                    <p>Intellectual Property</p></a>
                </div>
                <div class="img1">
                   <a href="education.php"> <img src="icon/education.png" alt="Education Law">
                    <p>Education Law</p></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
