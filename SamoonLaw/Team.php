<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modern Team Card</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5d72166fb5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    
    <style>
        /* Team Section Styling */
        .team-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #266470;
            min-height: 100vh;
            font-family: 'Roboto Slab', sans-serif;
            color: white;
        }

        .heading {
            font-size: 2em;
            color: white;
            margin-top: 20px;
            font-weight: 900;
        }

        .scroll-container {
            display: flex;
            align-items: center;
            width: 90%;
            margin-top: 100px; /* Increased space between heading and cards */
        }

        .scroll-button {
            font-size: 2em;
            color: #fff;
            cursor: pointer;
            margin: 0 10px;
            user-select: none;
        }

        .card-row {
            display: flex;
            overflow: hidden;
            scroll-behavior: smooth;
            width: 100%;
            gap: 20px;
        }

        /* Individual Card Styling */
        .card {
            background: #f0f0f0; /* Pearl Arctic White */
            border-radius: 15px;
            width: 250px;
            height: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly; /* Equal spacing between elements */
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            flex-shrink: 0;
            text-align: center;
            color: #333;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            height: 80px;
            width: 80px;
            border-radius: 50%;
            border: 3px solid #000;
        }

        .card h3 {
            font-size: 1.1em;
            font-weight: 800;
            color: #333;
            margin: 0;
        }

        .card p {
            font-size: 0.9em;
            font-weight: 400;
            color: #555;
            margin: 0;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .card {
                width: 200px;
                height: 200px;
            }

            .scroll-button {
                font-size: 1.5em;
            }
        }
    </style>
</head>

<body>
    <div class="team-section">
        <div class="heading">Meet Our Team</div>
        <div class="scroll-container">
            <span class="scroll-button" id="prev">&#9664;</span>
            <div class="card-row">
                <!-- Card 1 -->
                <div class="card">
                    <img src="team/11.jpg" alt="Profile Picture">
                    <h3>ADV ARCHER</h3>
                    <p>Founder</p>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <img src="team/12.PNG" alt="Profile Picture">
                    <h3>ADV JANE</h3>
                    <p>Associate</p>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <img src="team/12.PNG" alt="Profile Picture">
                    <h3>ADV JANE</h3>
                    <p>Associate</p>
                </div>

                <!-- Card 4 -->
                <div class="card">
                    <img src="team/11.jpg" alt="Profile Picture">
                    <h3>MR JOHN</h3>
                    <p>Intern</p>
                </div>

                <!-- Card 5 -->
                <div class="card">
                    <img src="team/11.jpg" alt="Profile Picture">
                    <h3>MR JOHN</h3>
                    <p>Intern</p>
                </div>
            </div>
            <span class="scroll-button" id="next">&#9654;</span>
        </div>
    </div>

    <script>
        document.getElementById("prev").addEventListener("click", function () {
            document.querySelector(".card-row").scrollBy({
                left: -300,
                behavior: "smooth"
            });
        });

        document.getElementById("next").addEventListener("click", function () {
            document.querySelector(".card-row").scrollBy({
                left: 300,
                behavior: "smooth"
            });
        });
    </script>
</body>

</html>
