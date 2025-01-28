<?php
session_start(); 

if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="FtoF.css">
    <link rel="stylesheet" href="FindRecipe.css">
    <title>FtoF Find Recipe</title>
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

    <section class="Recetat">
 
        <div class="navbar">
            <nav class="MiniNav">
                <ul>
                    <li><a href="recipes.php">Explore</a></li>
                    <li><a href="FindRecipe.php">Find Recipes</a></li>
                    <li><a href="shareYO.php">Share Your Own</a></li>
                </ul>
            </nav>
        </div>

            <div class="Gjeje">
                <div class="GjejeInfo">
                <h3>Welcome to Find Recipe</h3>
                <br>
                <p>This section of our website allows you to find a personalized recipe by simply selecting the ingridients that you have avalible in your fridge.</p>
                </div>

                <div class="Perberes">

                    <h2 style="color: black;">Choose your ingridients</h2>

                <div class="Mjetet">

                    <div class="Seleksione">
                        <h3>Vegetables</h3>
                        <ul type="none">
                            <li><input type="checkbox"> Carrots</li>
                            <li><input type="checkbox"> Potatoes</li>
                            <li><input type="checkbox"> Onions</li>
                            <li><input type="checkbox"> Tomatoes</li>
                            <li><input type="checkbox"> Garlic</li>
                            <li><input type="checkbox"> Spinach</li>
                            <li><input type="checkbox"> Bell Peppers</li>
                            <li><input type="checkbox"> Broccoli</li>
                        </ul>
                    </div>
                    
                    <div class="Seleksione">
                        <h3>Fruits</h3>
                        <ul type="none">
                            <li><input type="checkbox"> Apples</li>
                            <li><input type="checkbox"> Bananas</li>
                            <li><input type="checkbox"> Oranges</li>
                            <li><input type="checkbox"> Lemons</li>
                            <li><input type="checkbox"> Strawberries</li>
                            <li><input type="checkbox"> Pineapples</li>
                            <li><input type="checkbox"> Mangoes</li>
                            <li><input type="checkbox"> Blueberries</li>
                        </ul>
                    </div>
                    
                    <div class="Seleksione">
                        <h3>Dairy and Eggs</h3>
                        <ul type="none">
                            <li><input type="checkbox"> Milk</li>
                            <li><input type="checkbox"> Chicken Eggs</li>
                            <li><input type="checkbox"> Butter</li>
                            <li><input type="checkbox"> Yogurt</li>
                            <li><input type="checkbox"> Duck Eggs</li>
                            <li><input type="checkbox"> Cream</li>
                            <li><input type="checkbox"> Margarine</li>
                            <li><input type="checkbox"> Whipped Cream</li>
                        </ul>
                    </div>
                    
                    <div class="Seleksione">
                        <h3>Cheese</h3>
                        <ul type="none">
                            <li><input type="checkbox"> Cheddar</li>
                            <li><input type="checkbox"> Mozzarella</li>
                            <li><input type="checkbox"> Parmesan</li>
                            <li><input type="checkbox"> Swiss</li>
                            <li><input type="checkbox"> Blue Cheese</li>
                            <li><input type="checkbox"> Ricotta</li>
                            <li><input type="checkbox"> Feta</li>
                            <li><input type="checkbox"> Cream Cheese</li>
                        </ul>
                    </div>
                    
                    <div class="Seleksione">
                        <h3>Spices and Oils</h3>
                        <ul type="none">
                            <li><input type="checkbox"> Olive Oil</li>
                            <li><input type="checkbox"> Salt</li>
                            <li><input type="checkbox"> Pepper</li>
                            <li><input type="checkbox"> Paprika</li>
                            <li><input type="checkbox"> Cumin</li>
                            <li><input type="checkbox"> Turmeric</li>
                            <li><input type="checkbox"> Oregano</li>
                            <li><input type="checkbox"> Basil</li>
                        </ul>
                    </div>
                    
                    <div class="Seleksione">
                        <h3>Meats</h3>
                        <ul type="none">
                            <li><input type="checkbox"> Chicken</li>
                            <li><input type="checkbox"> Beef</li>
                            <li><input type="checkbox"> Pork</li>
                            <li><input type="checkbox"> Turkey</li>
                            <li><input type="checkbox"> Lamb</li>
                            <li><input type="checkbox"> Bacon</li>
                            <li><input type="checkbox"> Sausages</li>
                            <li><input type="checkbox"> Ham</li>
                        </ul>
                    </div>
                    
                    <div class="Seleksione">
                        <h3>Pasta and Bread</h3>
                        <ul type="none">
                            <li><input type="checkbox"> Spaghetti</li>
                            <li><input type="checkbox"> Penne</li>
                            <li><input type="checkbox"> Fusilli</li>
                            <li><input type="checkbox"> Macaroni</li>
                            <li><input type="checkbox"> Bread</li>
                            <li><input type="checkbox"> Buns</li>
                            <li><input type="checkbox"> Tortillas</li>
                            <li><input type="checkbox"> Bagels</li>
                        </ul>
                    </div>
                    <div class="Seleksione">
                        <h3>Condiments</h3>
                        <ul type="none">
                            <li><input type="checkbox"> Soy Sauce</li>
                            <li><input type="checkbox"> Ketchup</li>
                            <li><input type="checkbox"> Mustard</li>
                            <li><input type="checkbox"> Mayonnaise</li>
                            <li><input type="checkbox"> Vinegar</li>
                            <li><input type="checkbox"> Hot Sauce</li>
                            <li><input type="checkbox"> Barbecue Sauce</li>
                            <li><input type="checkbox"> Worcestershire Sauce</li>
                        </ul>
                    </div>
                    <!-- <div class="Seleksione">
                        <h3>Seafood</h3>
                        <ul type="none">
                            <li><input type="checkbox"> Salmon</li>
                            <li><input type="checkbox"> Tuna</li>
                            <li><input type="checkbox"> Shrimp</li>
                            <li><input type="checkbox"> Crab</li>
                            <li><input type="checkbox"> Lobster</li>
                            <li><input type="checkbox"> Mackerel</li>
                            <li><input type="checkbox"> Clams</li>
                            <li><input type="checkbox"> Scallops</li>
                        </ul>
                    </div>
                    <div class="Seleksione">
                        <h3>Nuts and Seeds</h3>
                        <ul type="none">
                            <li><input type="checkbox"> Almonds</li>
                            <li><input type="checkbox"> Walnuts</li>
                            <li><input type="checkbox"> Cashews</li>
                            <li><input type="checkbox"> Peanuts</li>
                            <li><input type="checkbox"> Sunflower Seeds</li>
                            <li><input type="checkbox"> Pumpkin Seeds</li>
                            <li><input type="checkbox"> Chia Seeds</li>
                            <li><input type="checkbox"> Flaxseeds</li>
                        </ul>
                    </div> -->


                    <div class="FRBut">
                    <button class="FindBut">Find Recipe</button>
                    </div>
                </div>
                </div>


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