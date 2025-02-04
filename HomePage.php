<?php
session_start(); 

if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>FridgeToFood</title>

        <link rel="stylesheet" href="FtoF.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
    <div class="Header">
            <header>
                <div class="Logo">
                    <img src="Images/logoFf.png" alt="logo">
                </div>

                <nav class="Navigimi">
                    <div class="Menus">
                        <ul>
                            <li class="crumb"><a href="HomePage.php"> Home </a></li>
                            <li class="crumb"><a href="recipes.php"> Recipes </a></li>
                            <li class="crumb"><a href="AboutUs.php"> About Us </a></li>
                            <li class="crumb"><a href="contact.php"> Contact </a></li>
                            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                        <li class="crumb"><a href="admin_recipes.php"> Dashboard </a></li>
                    <?php endif; ?>
                        </ul>
                    </div>
                </nav>

                <div class="BigBut">
                    <?php if (isset($_SESSION['username'])): ?>
                        <a href="Logout.php" class="LogButt">Logout</a>
                    <?php else: ?>
                        <a href="Login.php" class="LogButt">Login</a>
                    <?php endif; ?>
                </div>
            </header>
        </div>

        <div class="Bigbox">
            <div class="Prsh">
                <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
                <h3>Are you hungry?</h3>
                <hr>
                <h4>Join us as we discover amazing recipes from all around the world. You can even find recipes that match with your ingredients!</h4>
            </div>
        </div>

        <div class="Nextbox">
            <hr id="VijaMes">  
            <h2>What's New?</h2>
            <h3>Check out the most trending recipes</h3>

            <div class="New">
                <div class="RecetatBox">
                    <a style="text-decoration: none;" href="recipes.php"><img src="Images/shrimptaco.jpg" alt="Receta 3">
                    <h2>Shrimp Taco</h2>
                    <p>A shrimp taco recipe combines juicy, seasoned shrimp with fresh toppings for a vibrant, flavorful dish.</p></a>
                </div>

                <div class="RecetatBox">
                <a href="recipes.php" style="text-decoration: none;">
                    <img src="Images/receta3.jpg" alt="Receta 3">
                    <h2>Vegetable Stir Fry</h2>
                    <p>A quick and healthy stir fry loaded with fresh veggies and soy sauce.</p></a>
                </div>

                <div class="RecetatBox">
                <a href="recipes.php" style="text-decoration: none;">
                    <img src="Images/receta6.jpg" alt="Receta 3">
                    <h2>Chocolate Cake</h2>
                    <p>A rich and moist chocolate cake with a silky chocolate frosting.</p></a>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer">
                <img class="Logo" src="Images/logoFf.png" alt="logo">

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