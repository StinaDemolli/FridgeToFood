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
    <link rel="stylesheet" href="AboutUs.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>FridgeToFood</title>
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







        <div class="PerNeve">
                <div class="Lart">
                    <div class="Fotoja">
                    <img src="Images/logoFf.png" alt="Logo">
                    </div>
                    <h1>About FridgeToFood</h1>
                </div>
       

        <div class="KushJemi">
            <h2>Who we are</h2>
            <p>At FridgeToFood, we’re passionate about the magic of cooking and the joy of sharing meals. Whether you're a seasoned chef, a weekend baker, or someone just starting your culinary journey, we’re here to inspire and guide you every step of the way.

Our mission is simple: to bring people together through food. We believe that every recipe tells a story and every meal has the power to create memories. That’s why we’re dedicated to curating a collection of recipes, tips, and ideas that are not only delicious but also approachable and fun to make.

With contributions from home cooks, professional chefs, and food enthusiasts from around the world, our website is a vibrant community where flavor, creativity, and tradition meet. We celebrate the diversity of global cuisine while making it easy to recreate your favorite dishes right in your kitchen.

Join us as we explore new flavors, master timeless techniques, and celebrate the love of good food. Together, let’s make every meal an unforgettable experience!</p>

        </div>

        <div class="KushJemi">
            <h2>Our History</h2>
            <p>FridgeToFood was born out of a simple idea: to create a space where people could connect through the universal language of food. What started as a small collection of family recipes has grown into a vibrant platform celebrating culinary traditions from around the world.

                It all began in 2024 when Stina and Vesa decided to share their passion for cooking online. Inspired by cherished moments in the kitchen and around the dinner table, we set out to build a community where home cooks and food lovers could find inspiration, exchange ideas, and discover new flavors.
                
                Over the years, our recipe collection has expanded, our community has flourished, and our love for all things food has only deepened. From classic comfort dishes to innovative creations, we’ve stayed committed to our roots: celebrating the joy of cooking and the connections it creates.
                
                Today, FridgeToFood is more than just a recipe site—it’s a destination for food lovers who want to learn, experiment, and share their culinary adventures. We’re proud of how far we’ve come and excited to continue this journey with you. Here's to many more years of delicious memories!</p>
        </div>

        <div class="KushJemi">
            <h2>Our Goal</h2>
            <p>At FridgeToFood, our ultimate goal is to inspire a lifelong love of cooking and foster meaningful connections through the power of food. We believe that the kitchen is more than just a place to prepare meals—it’s a space where creativity thrives, memories are made, and traditions are born.

                We are dedicated to making cooking accessible and enjoyable for everyone, regardless of experience. Whether you’re whipping up a quick weeknight dinner, experimenting with a new cuisine, or preparing a special meal for loved ones, we want to be your trusted guide every step of the way.
                
                Our vision is rooted in celebrating the diversity of flavors and cultures that make the culinary world so rich. By sharing recipes and stories from around the globe, we hope to bring the world closer together, one dish at a time. At the same time, we strive to make cooking a more sustainable practice, encouraging mindful choices that reduce food waste and honor the ingredients we use.
                
                Beyond recipes, our goal is to build a community—a place where food lovers can come together to share experiences, learn new skills, and exchange ideas. We aim to be a source of inspiration, empowerment, and connection for anyone who steps into their kitchen, whether for the first time or the thousandth.
                
                In everything we do, we’re guided by a passion for food and a belief in its ability to bring joy, comfort, and togetherness. Our goal is to help you create dishes that don’t just satisfy your hunger but also feed your soul and create lasting memories with the people you care about most. Together, let’s celebrate the art of cooking and the magic it brings to our lives.</p>
        </div>

        <div class="KushJemi">
            <h2>Meet our Team</h2>
 <br>
            <div class="Ekipa">

                <div class="Lojtari">

                    <div class="Imag">
                <img src="Images/icon.jpg" alt="foto1">
                    </div>
                    
                    <div class="Prshkk">
                <h3>Stina Demolli</h3>
                <br>
                <p>Stina was born in Prishtina, where she was used to eating fast food throughout her childhood. However, her passion for discovering healthier food options grew, and she became eager to explore diverse cuisines.</p>
                </div>
                </div>

                <div class="Lojtari">


                    <div class="Imag">
                <img src="Images/icon.jpg" alt="foto2">
                    </div>


                    <div class="Prshkk">
                <h3>Vesa Vrellaku</h3>
                <br>
                <p>Vesa was born in Drenica. She grew up eating the amazing traditional dishes her mother cooked for the family. She grew up and wanted to spread with the World the amazing taste of Albanian traditional cooking.</p>
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

<script>
    const s = document.querySelectorAll(".Lojtari");
    let pozita = 0;
    let intervali = null;
    
    slides();

    function slides(){
        showSlide(pozita);
        intervali = setInterval(next, 6000);
    }

    function showSlide(index){
        if(index >= s.length){
            pozita = 0;
        }
        else if (index < 0){
            pozita = s.length -1;
        }

        s.forEach(element=> {
     element.classList.remove("Shfaqe");
    });

    s[pozita].classList.add("Shfaqe");
    }


    function next(){
        pozita++;
        showSlide(pozita);
    }


</script>

</body>
</html>