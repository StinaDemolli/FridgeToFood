<?php
include_once 'db_connection.php';
include_once 'User.php';
include_once 'sessions.php';

Session::start();

if (isset($_SESSION['username'])) {
    if ($_SESSION['role'] === 'admin') {
        header("Location: admin_recipes.php");
    } else {
        header("Location: HomePage.php");
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $userData = $user->login($username, $password);

    if ($userData) {
        Session::set('user_id', $userData['id']);
        Session::set('username', $userData['username']);
        Session::set('role', $userData['role']);

        if ($userData['role'] === 'admin') {
            header("Location: admin_recipes.php");
        } else {
            header("Location:HomePage.php");
        }
        exit;
    } else {
        $error = "Invalid login credentials!";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="Ftof.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script>
        document.addEventListener("DOMContentLoaded",function(){
            document.getElementById("Login").addEventListener("submit",function(ngjarja){
                const user=document.getElementById('Username');
                const pass=document.getElementById('Password');

                if(user.value.trim() === "" || user.value.trim() == null){
                    alert("Please write your Username");
                    user.focus();
                    return false;
                }
                if(pass.value === "" || pass.value == null){
                    alert("Please write your Password");
                    pass.focus();
                    return false;
                }


            });
        });

    </script>
    
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
    

        
        <div class="trupi">

        <div class="Logini">
            <h1>Log in</h1>
            <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
            <form id="Login" method="POST" action="">
                <ul type="none">
                    <div class="Hyrja">
                    <li><input type="text" id="Username" name="username" placeholder="Username" required><i class='bx bx-user'></i></li>
                    <li><input type="password" id="Password" name="password" placeholder="Password" required><i class='bx bx-lock-alt'></i></li>
                </div>
                </ul>
                <div class="But">
                    <button type="submit">Log in</button>
                </div>
            </form>
            <h3><a href="Register.php">Or Sign up</a></h3>
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