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

        <link rel="stylesheet" href="contact.css"> <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        

        

            <section class="kontakti">
                <div class="kontenti">
                    <h2>Contact Us</h2>
                    <p>We're here to help! Reach out to us or send a message below.</p>
                </div>
                <div class="container">
                    <div class="infot">
                        <div class="kuti">
                            <div class="ikona"><i class='bx bx-phone'></i></div>
                            <div class="teksti">
                                <h3>Phone</h3>
                                <p>+123 456 789</p>
                            </div>
                        </div>
                        <div class="kuti">
                            <div class="ikona"><i class='bx bx-envelope'></i></div>
                            <div class="teksti">
                                <h3>Email</h3>
                                <p>contact@example.com</p>
                            </div>
                        </div>
                    </div>
                    <form class="mesazhi">
                        <div class="field">
                            <input type="text" placeholder="Your Name" required>
                        </div>
                        <div class="field">
                            <input type="email" placeholder="Your Email" required>
                        </div>
                        <div class="field">
                            <textarea placeholder="Your Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </section>
        </body>
        </html>


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