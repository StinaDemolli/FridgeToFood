<?php
require_once 'db_connection.php'; 

class User {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    public function register($fullName, $username, $email, $phoneNumber, $password, $confirmPassword) {
        if (empty($fullName) || empty($username) || empty($email) || empty($phoneNumber) || empty($password) || empty($confirmPassword)) {
            return "All fields are required.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format.";
        }

        if ($password !== $confirmPassword) {
            return "Passwords do not match.";
        }


        $checkQuery = "SELECT id FROM users WHERE username = :username OR email = :email";
        $checkStmt = $this->conn->prepare($checkQuery);
        $checkStmt->bindParam(":username", $username);
        $checkStmt->bindParam(":email", $email);
        $checkStmt->execute();

        if ($checkStmt->rowCount() > 0) {
            return "Username or email already exists.";
        }

    
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $role = 'user';

        $query = "INSERT INTO users (full_name, username, email, phone_number, password, role) VALUES (:fullName, :username, :email, :phoneNumber, :password, :role)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":fullName", $fullName);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phoneNumber", $phoneNumber);
        $stmt->bindParam(":password", $hashedPassword);
        $stmt->bindParam(":role", $role);

        return $stmt->execute() ? "Registration successful." : "Error: Unable to register.";
    }

    
    public function login($username, $password) {
        if (empty($username) || empty($password)) {
            return "Please fill in both fields.";
        }

        $query = "SELECT id, password, role FROM users WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $row['role'];

                return $row['role'] === 'admin' ? "admin_recipes.php" : "HomePage.php";
            }
        }
        return "Invalid username or password.";
    }

    public function isLoggedIn() {
        return isset($_SESSION['username']);
    }

    public function logout() {
        session_start();
        session_destroy();
        return "Logged out successfully.";
    }
}
?>
