<?php

class User {
    private $conn;

    public function __construct(PDO $db) {
        $this->conn = $db;
    }

    public function register($fullName, $username, $email, $phoneNumber, $password) {
    
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Invalid email address.");
        }
        if (strlen($password) < 8) {
            throw new InvalidArgumentException("Password must be at least 8 characters long.");
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $role = 'user';

        $query = "INSERT INTO users (full_name, username, email, phone_number, password, role) 
                  VALUES (:full_name, :username, :email, :phone_number, :password, :role)";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ':full_name' => $fullName,
                ':username' => $username,
                ':email' => $email,
                ':phone_number' => $phoneNumber,
                ':password' => $hashedPassword,
                ':role' => $role
            ]);
            return true;
        } catch (PDOException $e) {
        
            error_log("Registration failed: " . $e->getMessage());
            return false;
        }
    }

    public function login($username, $password) {
       
        $query = "SELECT id, password, role FROM users WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        
        if ($user && password_verify($password, $user['password'])) {
            return [
                'id' => $user['id'],
                'role' => $user['role']
            ];
        }
        return false;
    }
}

?>