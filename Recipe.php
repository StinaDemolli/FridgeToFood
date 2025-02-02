<?php
require_once 'db_connection.php';

class Recipe {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllRecipes() {
        $stmt = $this->conn->prepare("SELECT * FROM recipes ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createRecipe($title, $description, $image_url, $added_by) {
        $stmt = $this->conn->prepare("INSERT INTO recipes (title, description, image_url, added_by) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$title, $description, $image_url, $added_by]);
    }

    public function updateRecipe($title, $description, $image_url) {
        $stmt = $this->conn->prepare("UPDATE recipes SET title = ?, description = ?, image_url = ? WHERE id = ?");
        return $stmt->execute([$id, $title, $description, $image_url]);
    }

    public function deleteRecipe($id) {
        $stmt = $this->conn->prepare("DELETE FROM recipes WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
