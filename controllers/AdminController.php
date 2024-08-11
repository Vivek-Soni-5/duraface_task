<?php
require_once('../models/Model.php');

class AdminController extends Model {
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function addProduct($name, $description, $features, $image_url, $benefits, $applications) {
        $stmt = $this->db->prepare("INSERT INTO products (name, description, features, image_url, benefits, applications) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $description, $features, $image_url, $benefits, $applications]);
    }

    public function getProducts() {
        $stmt = $this->db->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
