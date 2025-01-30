<?php
class User {
    private $conn;
    private $table_name = 'users';

    public function __construct($db) {
        $this->conn = $db;
    }

    // Register a new user
    public function register($full_name, $username, $email, $phone_number, $password) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $role = 'user'; // Default role

        // Prepare the SQL query
        $query = "INSERT INTO {$this->table_name} (full_name, username, email, phone_number, password, role) 
                  VALUES (:full_name, :username, :email, :phone_number, :password, :role)";
        $stmt = $this->conn->prepare($query);

        // Bind parameters
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':role', $role);

        // Execute the query
        return $stmt->execute();
    }

    // Login a user
    public function login($email, $password) {
        // Fetch user by email
        $query = "SELECT id, full_name, username, email, phone_number, password, role 
                  FROM {$this->table_name} 
                  WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Check if user exists
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            
            if (password_verify($password, $row['password'])) {
                // Start session and store user data
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['full_name'] = $row['full_name'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['phone_number'] = $row['phone_number'];
                $_SESSION['role'] = $row['role'];
                return true;
            }
        }
        return false;
    }
}
?>