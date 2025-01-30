<?php
include_once 'db_connection.php';
include_once 'User.php';
include_once 'sessions.php';

Session::start();

if (isset($_SESSION['username'])) {
    header("Location: HomePage.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

    if ($user->register($full_name, $username, $email, $phone_number, $password)) {
        header("Location: Login.php");
        exit;
    } else {
        echo "Error registering user!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registers</title>
    <link rel="stylesheet" href="Register.css"> <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Ftof.css">

    <style>
        footer img{
            box-sizing: content-box;
        }
        .LogButt {
            box-sizing: content-box;
        }
    </style>

</head>
<body>


    <div class="Header">
        <header>

            <div class="Logo" >
        <img src="Images/logoFf.png" alt="logo">
            </div>

    <nav class="Navigimi">
        <div class="Menus">

            <ul>
                <li class="crumb"><a href="HomePage.php"> Home </a></li>
                <li class="crumb"><a href="recipes.php"> Recipes </a></li>
                <li class="crumb"><a href="AboutUs.php"> About Us </a></li>
                <li class="crumb"><a href="contact.php"> Contact </a></li>

            </ul>
            
        </div>
    </nav>

        <div class="BigBut">
            <a href="Login.php" class="LogButt">Login</a>
            </div>
    


        </header>

    </div>

    <div class="trupp">

    <div class="wrapper">
        <form action="register.php" method="POST">
            <h1>Registration</h1>
            <div class="input-box">
                <div class="input-field">
                    <input type="text"  name="full_name" placeholder="Full Name" required>
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-field">
                    <input type="text"   name="username"  placeholder="Username" required>
                    <i class='bx bx-user'></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bx-envelope' ></i>
                </div>

                <div class="input-field">
                    <input type="number" name="phone_number" placeholder="Phone Number" required>
                    <i class='bx bx-phone' ></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bx-lock-alt' ></i>
                </div>
                <div class="input-field">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    <i class='bx bx-lock-alt' ></i>
                </div>
            </div>
        
              <label for=""> <input type="checkbox">
            I declare that the above information provided is true and correct!</label>
             
            <button type="submit" class="button">Register</button>
       
        </form>
    </div>
</div>

    <footer>
        <div class="footer">

            <div>
                <img class="Logo" src="Images/logoFf.png" alt="logo">
            </div>

            <div class="Linqet">
                

            <div class="Kembet" class="more">
            
                <a href="recipes.php">Recipes</a>
                <a href="AboutUs.php">About Us</a>
                <a href="contact.php">Contact</a>
            
            </div>
            <div class="Kembet" class="more">
            
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
        </div>
                <div class="Kembet">
                        <h3>Follow us</h3>

                        <a href=""><img src="Images/instagram_1384015.png" alt="IgLogo"> Instagram</a>
                        <a href=""><img src="Images/linkedin_254394.png" alt="Linkedin"> Linkedin</a>
                        <a href=""><img src="Images/facebook_2168281.png" alt="FacebookLogo"> Facebook</a>
                        <a href=""><img src="Images/twitter-alt-circle_12107562.png" alt="XLogo"> X</a>
                        <a href=""><img src="Images/pinterest_4902409.png" alt="PinLogo"> Pinterest</a>
                        <a href=""><img src="Images/youtube_4494467.png" alt="YoutubeLogo"> Youtube</a>
                </div>

            </div>
        </div>

    </footer>

</body>
</html>