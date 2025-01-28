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
        <link rel="stylesheet" href="recipes.css"> <link rel="stylesheet" href="">
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
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

        

            <div class="navbar">
                <nav class="MiniNav">
                    <ul>
                        <li><a href="recipes.php">Explore</a></li>
                        <li><a href="FindRecipe.php">Find Recipes</a></li>
                        <li><a href="shareYO.php">Share Your Own</a></li>
                    </ul>
                </nav>
            </div>
<br>

<section class="Recetat">
                <div class="sliderii">
                    <div class="slidestot">

                        <div class="arrow">
                      <button class="prev" onclick="prev()" >&#10094;</button></div>

                        <div class="swiper-slide">
                            <div class="sliimg">
                                <img src="Images/sallata1.png" alt="sallata 1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sliimg">
                                <img src="Images/sallata2.png" alt="sallata 2">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sliimg">
                                <img src="Images/sallata3.png" alt="sallata 3">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sliimg">
                                <img src="Images/sallata4.png" alt="sallata 4">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sliimg">
                                <img src="Images/sallata5.png" alt="sallata 5">
                            </div>
                        </div>
                    

                    <div class="arrow">
                    <button class="next" onclick="next()" >&#10095;</button></div>
                </div>
                </div>
        <br>


          <h1>Our Favorite Recipes</h1>
                <div class="RecetatContainer">
                  
                <div class="RecetatBox">
                    <img src="Images/receta1.jpg" alt="Receta 1">
                    <h2>Spaghetti Carbonara</h2>
                    <p>A classic Italian pasta dish made with eggs, cheese, pancetta, and pepper.</p>
                </div>

       
                <div class="RecetatBox">
                    <img src="Images/receta2.jpg" alt="Receta 2">
                    <h2>Chicken Curry</h2>
                    <p>A rich and flavorful dish with tender chicken cooked in spicy curry sauce.</p>
                </div>
         
                <div class="RecetatBox">
                    <img src="Images/receta3.jpg" alt="Receta 3">
                    <h2>Vegetable Stir Fry</h2>
                    <p>A quick and healthy stir fry loaded with fresh veggies and soy sauce.</p>
                </div>

                <div class="RecetatBox">
                    <img src="Images/receta4.jpg" alt="Receta 4">
                    <h2>Classic Burger</h2>
                    <p>Juicy beef burger with lettuce, tomato, cheese, and a special sauce.</p>
                </div>
        
                
                <div class="RecetatBox">
                    <img src="Images/receta5.jpg" alt="Receta 5">
                    <h2>Caesar Salad</h2>
                    <p>A fresh salad with crisp romaine lettuce, creamy Caesar dressing, and croutons.</p>
                </div>
        
              
                <div class="RecetatBox">
                    <img src="Images/receta6.jpg" alt="Receta 6">
                    <h2>Chocolate Cake</h2>
                    <p>A rich and moist chocolate cake with a silky chocolate frosting.</p>
                </div>
        
      
                <div class="RecetatBox">
                    <img src="Images/receta7.jpg" alt="Receta 7">
                    <h2>Grilled Salmon</h2>
                    <p>Perfectly grilled salmon fillets with a zesty lemon butter sauce.</p>
                </div>
        
   
                <div class="RecetatBox">
                    <img src="Images/receta8.jpg" alt="Receta 8">
                    <h2>Homemade Pizza</h2>
                    <p>A delightful homemade pizza with a crispy crust, tomato sauce, mozzarella, and fresh basil.</p>
                </div>


                <!-- <div class="RecetatBox">
                    <img src="Images/shrimptaco.jpg" alt="Receta 9">
                    <h2>Shrimp Taco</h2>
                    <p>A shrimp taco recipe combines juicy, seasoned shrimp with fresh toppings for a vibrant, flavorful dish.</p>
                </div>


                <div class="RecetatBox">
                    <img src="Images/llazanja.jpg" alt="Receta 8">
                    <h2>Lasagna</h2>
                    <p>Lasagna is a classic Italian dish featuring layers of pasta, rich meat sauce, creamy cheese filling, and melted mozzarella.</p>
                </div> -->
            </div>

          
        </section>

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

<script>

        const slide = document.querySelectorAll(".sliimg img");
        let slidepoz = 0;
        let intervalId= null;
        
        
        intitializeSlide();
 
        function intitializeSlide(){

            slide[slidepoz].classList.add("Shfaqe");
            intervalId = setInterval(next, 4000)
        }

        function showSlide(index){

            if(index >= slide.length){
                slidepoz=0;
            }
            else if(index < 0){
                slidepoz = slide.length -1;
            }

            slide.forEach(slide => {
                slide.classList.remove("Shfaqe");
            });
            slide[slidepoz].classList.add("Shfaqe");
        }

        function prev(){
            showSlide(--slidepoz);
        }

        function next(){
            showSlide(++slidepoz);
        }
</script>

    </body>
</html>
