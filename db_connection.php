<?php
<<<<<<< HEAD
$servername = "localhost"; 
$db = "web_projekti";
$username = "root"; 
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
=======
$servername = "localhost";
$username = "root";
$password = "";
$database = "web_projekti"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
>>>>>>> parent of 0494a8f (krijimi i databazes me OOP)
}
?>