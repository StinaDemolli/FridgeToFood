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

                if(user.value === "" || user.value == null){
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

        
        <div class="trupi">
    
    
    <div class="Logini">
        <h1>Log in</h1>
    <ul type="none">

        <li>Please enter your information:</li>
        
        <div class="Hyrja">
        <li> <input type="text" id="Username" placeholder="Username" required> 
        <i class='bx bx-user' ></i></li>
        <li> <input type="password" id="Password" name="" placeholder="Password" required>
        <i class='bx bx-lock-alt' ></i> </li>
        </div>
    </ul> 

    <form id="Login">
        <div class="But">
          <button type="submit">Log in</button>
      </form>
        <h3><a href="Register.php">Or Sign up</a></h3>

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