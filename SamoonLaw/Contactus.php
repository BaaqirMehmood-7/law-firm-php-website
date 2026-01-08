<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$success = false; // Track if the email is sent

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'Your@mail.com'; // Your email
        $mail->Password = 'ipoeupbdskzmwfef'; // Your password or app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom($email, "$firstName $lastName");
        $mail->addAddress('recipient@mail.com'); // Recipient email

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "You have received a new message from the contact form.<br><br>" .
                      "First Name: $firstName<br>" .
                      "Last Name: $lastName<br>" .
                      "Email: $email<br>" .
                      "Phone Number: $phone<br>" .
                      "Message:<br>" . nl2br($message);

        $mail->send();
        $success = true; // Mark success when email is sent
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="3.png" type="image/png">
    <title>Contact - Archer & Associates</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Original styling from user's code */

        .form-container * {
            box-sizing: border-box;
        }

        .form-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #266470;
            width: 100%;
        }

        .form-container .form-content {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            max-width: 800px;
            text-align: center;
        }

        .form-container .form-content h1 {
            font-size: 50px;
            color: black;
        }

        .form-container .form-content form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
        }

        .form-container .form-content form .input-group {
            flex-basis: 48%;
            margin: 10px 1%;
            display: flex;
            flex-direction: column;
        }

        .form-container .form-content form label {
            font-weight: bold;
            margin-bottom: 5px;
            color: black;
        }

        .form-container .form-content form input[type="text"],
        .form-container .form-content form input[type="email"],
        .form-container .form-content form input[type="tel"] {
            font-size: 15px;
            padding: 10px;
            background: white;
            border: none;
            border-bottom: 2px solid #c5bebe;
            color: black;
        }

        .form-container .form-content form textarea {
            background: white;
            border-radius: 10px;
            border: 2px solid #c5bebe;
            padding: 10px;
            width: 96%;
            resize: none;
            height: 120px;
            margin-top: 20px;
            color: black;
        }

        .form-container .form-content form input[type="submit"] {
            width: 200px;
            height: 50px;
            border: none;
            border-radius: 10px;
            background-color: white;
            color: #266470;
            font-size: 20px;
            font-weight: 400;
            margin: 20px 0;
            transition: background-color 0.5s, transform 0.3s;
        }

        .form-container .form-content form input[type="submit"]:hover {
            background-color: #bb875d;
            cursor: pointer;
        }

        /* Sent button styling */
        .sent {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            transform: scale(1.1);
        }

        /* Go back button styling */
        .go-back {
            width: 200px;
            height: 40px;
            background-color: #f0f0f0;
            color: #266470;
            font-size: 16px;
            font-weight: 400;
            border-radius: 10px;
            border: none;
            margin-top: 10px;
            cursor: pointer;
        }

        .go-back:hover {
            background-color: #bb875d;
            color: white;
        }
    </style>
</head>
<body>

<div class="form-container">
    <div class="form-content">
        <h1>CONTACT US</h1>
        <form method="post">
            <div class="input-group">
                <label>First Name</label>
                <input type="text" name="firstName" placeholder="Enter your First Name" required>
            </div>
            <div class="input-group">
                <label>Last Name</label>
                <input type="text" name="lastName" placeholder="Enter your Last Name" required>
            </div>
            <div class="input-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your Email Address" required>
            </div>
            <div class="input-group">
                <label>Phone Number</label>
                <input type="tel" name="phone" placeholder="Enter your Phone Number" required>
            </div>
            <textarea name="message" placeholder="Write Your Message" required></textarea>
            <input id="sendButton" type="submit" value="SEND">
        </form>
        <button class="go-back" onclick="window.location.href='index.php'">Go Back</button>
    </div>
</div>

<?php if ($success): ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('sendButton');
        button.classList.add('sent');
        button.value = 'Sent!';

        // Change back to "Send" after 2 seconds
        setTimeout(function() {
            button.classList.remove('sent');
            button.value = 'SEND';
        }, 2000);
    });
</script>
<?php endif; ?>

</body>
</html>
