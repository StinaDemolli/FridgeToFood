<?php
session_start();
require_once 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = new User();

    $fullName = trim($_POST['full_name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phoneNumber = trim($_POST['phone_number']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if (empty($fullName) || empty($username) || empty($email) || empty($phoneNumber) || empty($password) || empty($confirmPassword)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $message = $user->register($fullName, $username, $email, $phoneNumber, $password, $confirmPassword);

    if ($message === "Registration successful.") {
        header("Location: Login.php"); 
        exit();
    } else {
        echo "<script>alert('$message');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Ftof.css">

    <style>
        footer img {
            box-sizing: content-box;
        }
        .LogButt {
            box-sizing: content-box;
        }
    </style>
</head>
<body>

    <div class="trupp">
        <div class="wrapper">
            <form id="register-form" action="Register.php" method="POST">
                <h1>Registration</h1>
                <div class="input-box">
                    <div class="input-field">
                        <input type="text" id="fullName" name="full_name" placeholder="Full Name" required>
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="input-field">
                        <input type="text" id="username" name="username" placeholder="Username" required>
                        <i class='bx bx-user'></i>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <i class='bx bx-envelope'></i>
                    </div>
                    <div class="input-field">
                        <input type="number" id="phone" name="phone_number" placeholder="Phone Number" required>
                        <i class='bx bx-phone'></i>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <i class='bx bx-lock-alt'></i>
                    </div>
                    <div class="input-field">
                        <input type="password" id="confirmPassword" name="confirm_password" placeholder="Confirm Password" required>
                        <i class='bx bx-lock-alt'></i>
                    </div>
                </div>
            
                <label for="agree">
                    <input type="checkbox" id="agree" required> I declare that the above information provided is true and correct!
                </label>

                <button type="submit" id="submit-btn" class="button">Register</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div>
                <img class="Logo" src="Images/logoFf.png" alt="logo">
            </div>

            <div class="Linqet">
                <div class="Kembet">
                    <a href="recipes.php">Recipes</a>
                    <a href="AboutUs.php">About Us</a>
                    <a href="contact.php">Contact</a>
                </div>
                <div class="Kembet">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
                <div class="Kembet">
                    <h3>Follow us</h3>
                    <a href="#"><img src="Images/instagram_1384015.png" alt="IgLogo"> Instagram</a>
                    <a href="#"><img src="Images/linkedin_254394.png" alt="Linkedin"> Linkedin</a>
                    <a href="#"><img src="Images/facebook_2168281.png" alt="FacebookLogo"> Facebook</a>
                    <a href="#"><img src="Images/twitter-alt-circle_12107562.png" alt="XLogo"> X</a>
                    <a href="#"><img src="Images/pinterest_4902409.png" alt="PinLogo"> Pinterest</a>
                    <a href="#"><img src="Images/youtube_4494467.png" alt="YoutubeLogo"> Youtube</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="Register.js"></script>
</body>
</html>
