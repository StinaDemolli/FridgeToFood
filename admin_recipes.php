<?php
include 'db_connection.php';
session_start();


if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: Login.php");
    exit;
}

if ($_SESSION['role'] !== 'admin') {
    header("Location: HomePage.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['create'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image_url = $_POST['image_url'];

        $stmt = $conn->prepare("INSERT INTO recipes (title, description, image_url) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $description, $image_url);
        $stmt->execute();
        $stmt->close();
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image_url = $_POST['image_url'];

        $stmt = $conn->prepare("UPDATE recipes SET title = ?, description = ?, image_url = ? WHERE id = ?");
        $stmt->bind_param("sssi", $title, $description, $image_url, $id);
        $stmt->execute();
        $stmt->close();
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $stmt = $conn->prepare("DELETE FROM recipes WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}

$result = $conn->query("SELECT * FROM recipes ORDER BY created_at DESC");
$recipes = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Manage Recipes</title>
    <link rel="stylesheet" href="Ftof.css">
    <link rel="stylesheet" href="admin_recipes.css">
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


        <div class="Box">


        <div class="Boxpar">

    <h1>Manage Recipes</h1>
    <form method="POST">
        <h3>Add New Recipe</h3>

        <div class="Inp">

        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <input type="text" name="image_url" placeholder="Image URL" required>
        <button type="submit" name="create">Add Recipe</button>

    </form>
    </div>
    </div>

    <div class="Boxdyt">

    <h2>All Recipes</h2>
    <?php foreach ($recipes as $recipe): ?>
        <form method="POST">
            <div class="Inner">
            <input type="hidden" name="id" value="<?= $recipe['id'] ?>">
            <input type="text" name="title" value="<?= htmlspecialchars($recipe['title']) ?>" required>
            <textarea name="description" required><?= htmlspecialchars($recipe['description']) ?></textarea>
            <input type="text" name="image_url" value="<?= htmlspecialchars($recipe['image_url']) ?>" required>
            <button type="submit" name="update">Update</button>
            <button type="submit" name="delete" onclick="return confirm('Are you sure?')">Delete</button>
            </div>
        </form>
    <?php endforeach; ?>
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